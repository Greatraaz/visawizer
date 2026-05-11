<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;
use Razorpay\Api\Errors\SignatureVerificationError;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CoursesController extends Controller
{
    public function checkout(Request $request, $slug)
    {
        $course = Courses::where('slug', $slug)->firstOrFail();
        return view('courses.checkout', compact('course'));
    }

    public function placeOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:100',
            'phone'   => ['required', 'regex:/^[6-9]\d{9}$/'],
            'email' => [
                'required',
                'email:rfc,dns',
                'not_regex:/@(tempmail|yopmail|mailinator|10minutemail)\./i'
            ],
            'message'   => 'nullable|string|max:1000',
            'gst'   => 'nullable|max:30',
            'minPrice'   => 'nullable|integer',
            'bot_field' => 'max:0'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $pass= rand(10000, 99999);
            $user = User::create([
                'userTypeId' => 1,
                'username' => ucwords($request->name),
                'email'    => strtolower($request->email),
                'mobile'   => $request->phone,
                'pass'   => $pass,
                'password' => Hash::make($pass),
                'status'   => 1,
            ]);
            Mail::send('emailer.userLogin', [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $pass,
            ], function($message) use ($request){
                $message->to($request->email)->subject('Your Login Details – Ethics4Work');
            });
        }
        Auth::guard('web')->login($user);

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $course = Courses::select('price','minPrice')->findOrFail(decrypt($request->courseId));
        if (!empty($request->minPrice)) {
            $gst = $course->minPrice * 0.18;
            $totalPrice = $course->minPrice + $gst;
        }else{
            $gst = $course->price * 0.18;
            $totalPrice = $course->price + $gst;
        }
        
        $order = $api->order->create([
            'receipt'  => uniqid('order_'),
            'amount'   => $totalPrice * 100,
            'currency' => 'INR'
        ]);

        return response()->json([
            'order_id' => $order->id,
            'key'      => config('services.razorpay.key')
        ]);
    }

    public function verifyPayment(Request $request)
    {
        if (!auth()->check()) {
            return response()->json(['status'=>'error','message'=>'Session expired please login.'],401);
        }

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        try {
            $api->utility->verifyPaymentSignature([
                'razorpay_order_id'   => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature'  => $request->razorpay_signature,
            ]);

            if (Order::where('razorpay_payment_id',$request->razorpay_payment_id)->exists()) {
                return response()->json(['status' => 'error', 'errors' => 'already_processed'], 422);
            }

            $discount = $request->discount ?? 0;
            $state = $request->state;
            $gstno = $request->gstno ?? Null;

            $courseId = decrypt($request->courseId);
            $course   = Courses::select('id','title','price', 'minPrice')->findOrFail($courseId);
            if (!empty($request->minPrice)) {
                $total = $course->minPrice;
                $json['minPrice'] = $course->minPrice;
            }else{
                $total = max($course->price - $discount, 0);
            }
            $json['id'] = $course->id;
            $json['title'] = $course->title;
            $json['price'] = $course->price;  
                      
            if (strtolower($state) !== 'uttar pradesh') {
                $igst = round($total * 0.18);
                $cgst = $sgst = null;
                $gst  = $igst;
            } else {
                $cgst = round($total * 0.09);
                $sgst = round($total * 0.09);
                $igst = null;
                $gst  = $cgst + $sgst;
            }
            $subTotal = $total + $gst;

            $invoice = DB::transaction(function () use ($request,$course,$subTotal,$discount,$cgst,$sgst,$igst,$state, $gstno, $json) {

                $order = Order::create([
                    'userId'                => auth()->id(),
                    'orderId'               => 'ORD'.mt_rand(100000,999999).date('mY'),
                    'razorpay_order_id'     => $request->razorpay_order_id,
                    'razorpay_payment_id'   => $request->razorpay_payment_id,
                    'productDetail'         => json_encode($json),
                    'netAmount'             => $subTotal,
                    'status'                => 1,
                    'schemeApplied'         => 'No',
                    'discount'              => $discount,
                    'message'               => $request->message ?? Null,
                    'paymentMethod'         => 'UPI',
                ]);

                return $this->generateInvoice($order,$cgst,$sgst,$igst,$subTotal,$state, $gstno);
            });

            return response()->json(['status' => 'success', 'message' => 'Payment verified', 'invoice_id' => $invoice->id]);

        } catch (SignatureVerificationError $e) {
            return response()->json(['status'=>'failed','error'=>$e->getMessage()],400);
        }
    }


    public function generateInvoice($order, $cgst, $sgst, $igst, $subTotal, $state, $gstno)
    {
        $user = auth()->user();

        return Invoice::create([
            'userId'        => $user->id,
            'orderId'       => $order->id,
            'invoiceNo'     => 'INV'.mt_rand(100000,999999).date('mY'),
            'username'      => $user->username,
            'email'         => $user->email,
            'mobile'        => $user->mobile,
            'discount'      => $order->discount,
            'cgst'          => $cgst,
            'sgst'          => $sgst,
            'igst'          => $igst,
            'subTotal'      => $subTotal,
            'totalAmount'   => $order->netAmount,
            'gstno'         => $gstno,
            'productDetail' => $order->productDetail,
            'state'         => $state,
            'status'        => 1
        ]);
    }


    public function orders()
    {
        $orders = Order::where('userId', Auth::id())->with('items.product')->orderby('id', 'desc')->get();
        return view('list.orders', compact('orders'));
    }

    public function sendMail(Request $request)
    {
        $invoiceId = $request->invoice_id;
        $invoice = Invoice::find($invoiceId);

        if (!$invoice) {
            return response()->json(['status' => 'error']);
        }

        Http::get('http://truebulksms.biz/api.php', [
            'username'   => 'evolviaOTP',
            'password'   => '721579',
            'sender'     => 'EVOLVA',
            'sendto'     => '91' . $invoice->mobile,
            'message'    => 'Dear '.$invoice->username.', Thank you for enrolling in the course offered by us. We truly appreciate the trust you have placed in us. Team Evolvia',
            'PEID'       => '1701176189167264496',
            'templateid' => '1707176970468573919',
        ]);

        $product = json_decode($invoice->productDetail);
        Mail::send('emailer.courseUser', [
            'name' => $invoice->username,
            'email' => $invoice->email,
            'course' => $product->title,
        ], function($message) use ($invoice){
            $message->to($invoice->email)->subject('Your Course Purchase – TheBFSI');
        });

        Mail::send('emailer.courseAdmin', [
            'name' => $invoice->username,
            'email' => $invoice->email,
            'course' => $product->title,
        ], function ($message) {
            $message->to('ethics4workindia@gmail.com')->subject('New Course Purchase – TheBFSI');
        });

        return response()->json(['status' => 'success']);
    }


}
