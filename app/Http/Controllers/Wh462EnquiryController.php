<?php

namespace App\Http\Controllers;

use App\Mail\Wh462EnquiryThankYou;
use App\Models\Wh462Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Wh462EnquiryController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
            'phone' => ['required', 'string', 'max:40', function (string $attribute, mixed $value, \Closure $fail) {
                $digits = preg_replace('/\D/', '', (string) $value);
                if (strlen($digits) < 8 || strlen($digits) > 15) {
                    $fail('Enter a valid phone or WhatsApp number.');
                }
            }],
            'email' => [
                'required',
                'email',
                'max:255',
                'not_regex:/@(tempmail|yopmail|mailinator|10minutemail)\./i',
            ],
            'residence_country' => 'nullable|string|max:120',
            'passport_country' => 'nullable|string|max:120',
            'age' => 'nullable|string|max:10',
            'education' => 'nullable|string|max:255',
            'english_evidence' => 'nullable|string|max:20',
            'previous_wh_visa' => 'nullable|string|max:20',
            'travel_month' => 'nullable|string|max:80',
            'preferred_action' => 'nullable|string|max:80',
            'message' => 'nullable|string|max:5000',
            'formName' => 'nullable|string|max:120',
            'bot_field' => 'max:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $formId = $request->input('formName') ?: '462 Landing';

        $enquiry = Wh462Enquiry::create([
            'form_id' => $formId,
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'residence_country' => $data['residence_country'] ?? null,
            'passport_country' => $data['passport_country'] ?? null,
            'age' => $data['age'] ?? null,
            'education' => $data['education'] ?? null,
            'english_evidence' => $data['english_evidence'] ?? null,
            'previous_wh_visa' => $data['previous_wh_visa'] ?? null,
            'travel_month' => $data['travel_month'] ?? null,
            'preferred_action' => $data['preferred_action'] ?? null,
            'message' => $data['message'] ?? null,
        ]);

        $adminMessage = $this->formatAdminMessage($enquiry);

        try {
            DB::table('contactus')->insert([
                'formName' => mb_substr($formId, 0, 100),
                'course' => 'Work and Holiday Visa Subclass 462',
                'name' => mb_substr($enquiry->name, 0, 50),
                'phone' => mb_substr($enquiry->phone, 0, 15),
                'email' => mb_substr($enquiry->email, 0, 30),
                'city' => mb_substr($enquiry->residence_country ?? '', 0, 100),
                'message' => mb_substr($adminMessage, 0, 250),
            ]);
        } catch (\Throwable $e) {
            Log::warning('WH462 contactus backup insert failed', [
                'enquiry_id' => $enquiry->id,
                'error' => $e->getMessage(),
            ]);
        }

        try {
            Mail::to($enquiry->email)->send(new Wh462EnquiryThankYou($enquiry));
        } catch (\Throwable $e) {
            Log::warning('WH462 thank-you email could not be sent', [
                'enquiry_id' => $enquiry->id,
                'email' => $enquiry->email,
                'error' => $e->getMessage(),
            ]);
        }

        try {
            Mail::send('emailer.courseAdmin', [
                'name' => $enquiry->name,
                'topic' => 'Work and Holiday Visa Subclass 462',
                'email' => $enquiry->email,
                'phone' => $enquiry->phone,
                'city' => $enquiry->residence_country ?? '',
                'messageText' => $adminMessage,
            ], function ($message) {
                $message->to('info@visawizer.com.au')->subject('New 462 Visa Landing Enquiry');
            });
        } catch (\Throwable $e) {
            Log::warning('WH462 admin notification email could not be sent', [
                'enquiry_id' => $enquiry->id,
                'error' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! We have received your enquiry. A confirmation email has been sent to your inbox.',
            'enquiry_id' => $enquiry->id,
        ]);
    }

    protected function formatAdminMessage(Wh462Enquiry $enquiry): string
    {
        $lines = array_filter([
            'Reference: #'.$enquiry->id,
            $enquiry->residence_country ? 'Country of residence: '.$enquiry->residence_country : null,
            $enquiry->passport_country ? 'Passport country: '.$enquiry->passport_country : null,
            $enquiry->age ? 'Age: '.$enquiry->age : null,
            $enquiry->education ? 'Education: '.$enquiry->education : null,
            $enquiry->english_evidence ? 'English evidence: '.$enquiry->english_evidence : null,
            $enquiry->previous_wh_visa ? 'Previous WH/462 visa: '.$enquiry->previous_wh_visa : null,
            $enquiry->travel_month ? 'Planned travel: '.$enquiry->travel_month : null,
            $enquiry->preferred_action ? 'Preferred action: '.$enquiry->preferred_action : null,
        ]);

        $body = implode("\n", $lines);
        if ($enquiry->message) {
            $body .= ($body ? "\n\n" : '').'Message: '.$enquiry->message;
        }

        return $body ?: '462 landing page enquiry';
    }
}
