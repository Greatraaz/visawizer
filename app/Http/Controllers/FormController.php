<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submitContact(Request $request)
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
            'bot_field' => 'max:0', 
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        DB::table('contactus')->insert([
            'formName'   => $request->formName ?? '', 
            'course'     => $request->course ?? 'Other', 
            'name'       => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'city'       => $request->city ?? '',
            'message'    => $request->message,
        ]);

        if ($request->formName != 'Quiz') {        
            Mail::send('emailer.courseThankYou', [
                'name' => $request->name,
                'courseName' => $request->course
            ], function($message) use ($request){
                $message->to($request->email)->subject('Thank You for Your Interest – Ethics4Work');
            });
        }

        return response()->json(['status' => 'success','message' => 'Thank you! Your message has been submitted.']);
    }

    public function submitNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:100',
            'email' => [
                'required',
                'email:rfc,dns',
                'not_regex:/@(tempmail|yopmail|mailinator|10minutemail)\./i'
            ],
            'bot_field' => 'max:0', 
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        DB::table('contactus')->insert([
            'formName'   => $request->formName ?? '', 
            'name'       => $request->name,
            'email'      => $request->email,
        ]);

        return response()->json(['status' => 'success','message' => 'Thank you! Your message has been submitted.']);
    }

    public function submitEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'seminarId' => 'required|string|max:100',
            'name'      => 'required|string|max:100',
            'phone'     => ['required', 'regex:/^[6-9]\d{9}$/'],
            'email' => [
                'required',
                'email:rfc,dns',
                'not_regex:/@(tempmail|yopmail|mailinator|10minutemail)\./i'
            ],
            'message'   => 'nullable|string|max:1000',
            'bot_field' => 'max:0', 
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        DB::table('eventRegistration')->insert([
            'seminarId'  => $request->seminarId, 
            'name'       => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'message'    => $request->message ?? 'N/A',
        ]);

        Mail::send('emailer.eventThankYou', [
            'name' => $request->name,
            'event' => $request->event
        ], function($message) use ($request){
            $message->to($request->email)->subject('Thank You for Your Registration');
        });

        return response()->json(['status' => 'success','message' => 'Thank you! Your message has been submitted.']);
    }

}
