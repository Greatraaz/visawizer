<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentBookingThankYou;
use App\Models\AppointmentBooking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AppointmentBookingController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $hasSlots = $request->filled('slots') && is_array($request->input('slots'));

        $rules = [
            'appointment_title' => 'required|string|max:255',
            'appointment_duration' => 'nullable|string|max:50',
            'appointment_price' => 'nullable|string|max:50',
            'timezone' => 'nullable|string|max:120',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'required|string|max:90',
            'email' => 'required|email:rfc|max:255',
        ];

        if ($hasSlots) {
            $rules['slots'] = 'required|array|min:1|max:50';
            $rules['slots.*.date'] = 'required|date|after_or_equal:today';
            $rules['slots.*.time'] = 'required|string|max:32';
        } else {
            $rules['appointment_date'] = 'required|date|after_or_equal:today';
            $rules['appointment_time'] = 'required|string|max:32';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        if ($hasSlots) {
            $slots = array_values(array_map(function (array $row) {
                return [
                    'date' => $row['date'],
                    'time' => $row['time'],
                ];
            }, $validated['slots']));

            $first = $slots[0];
            $booking = AppointmentBooking::create([
                'appointment_title' => $validated['appointment_title'],
                'appointment_duration' => $validated['appointment_duration'] ?? null,
                'appointment_price' => $validated['appointment_price'] ?? null,
                'appointment_date' => $first['date'],
                'appointment_time' => $first['time'],
                'appointment_slots' => $slots,
                'timezone' => $validated['timezone'] ?? null,
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'status' => 'pending_payment',
            ]);
        } else {
            $booking = AppointmentBooking::create([
                'appointment_title' => $validated['appointment_title'],
                'appointment_duration' => $validated['appointment_duration'] ?? null,
                'appointment_price' => $validated['appointment_price'] ?? null,
                'appointment_date' => $validated['appointment_date'],
                'appointment_time' => $validated['appointment_time'],
                'appointment_slots' => null,
                'timezone' => $validated['timezone'] ?? null,
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'status' => 'pending_payment',
            ]);
        }

        try {
            Mail::to($booking->email)->send(new AppointmentBookingThankYou($booking));
        } catch (\Throwable $e) {
            Log::warning('Appointment thank-you email could not be sent', [
                'booking_id' => $booking->id,
                'email' => $booking->email,
                'error' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you. We have received your appointment request. A confirmation email has been sent to your inbox with your details.',
            'booking_id' => $booking->id,
        ]);
    }
}
