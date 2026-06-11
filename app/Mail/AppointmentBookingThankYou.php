<?php

namespace App\Mail;

use App\Models\AppointmentBooking;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentBookingThankYou extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public AppointmentBooking $booking
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you — your Visawizer appointment request (Ref #'.$this->booking->id.')',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.appointment-booking-thank-you',
            with: [
                'slotLines' => $this->slotLinesForEmail(),
            ],
        );
    }

    /**
     * @return array<int, string>
     */
    protected function slotLinesForEmail(): array
    {
        $b = $this->booking;
        $slots = $b->appointment_slots;
        if (is_array($slots) && count($slots) > 0) {
            $lines = [];
            foreach ($slots as $row) {
                if (empty($row['date'])) {
                    continue;
                }
                $lines[] = Carbon::parse($row['date'])->format('l, j F Y').' at '.($row['time'] ?? '');
            }

            return $lines;
        }

        $d = $b->appointment_date;
        if ($d) {
            return [Carbon::parse($d)->format('l, j F Y').' at '.($b->appointment_time ?? '')];
        }

        return [];
    }
}
