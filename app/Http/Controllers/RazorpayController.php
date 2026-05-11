<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class RazorpayController extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'total' => 'required|numeric|min:1'
        ]);

        $api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );

        $order = $api->order->create([
            'receipt'  => uniqid('order_'),
            'amount'   => $request->total * 100,
            'currency' => 'INR'
        ]);

        return response()->json([
            'order_id' => $order->id,
            'key'      => config('services.razorpay.key')
        ]);
    }

    public function verifyPayment(Request $request)
    {
        $api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );

        try {
            $api->utility->verifyPaymentSignature([
                'razorpay_order_id'   => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature'  => $request->razorpay_signature,
            ]);

            // ✅ PAYMENT SUCCESS
            // 👉 yahan DB save, enrollment, invoice logic

            return response()->json(['status' => 'success']);

        } catch (SignatureVerificationError $e) {
            return response()->json([
                'status' => 'failed',
                'error'  => $e->getMessage()
            ], 400);
        }
    }
}
