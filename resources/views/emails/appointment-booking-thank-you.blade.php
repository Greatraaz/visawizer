<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment confirmation — Visawizer</title>
</head>
<body style="margin:0; padding:0; background-color:#f1f5f9; font-family:Arial, Helvetica, sans-serif; color:#071032;">

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#f1f5f9; padding:32px 16px;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width:600px; width:100%; background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 12px 40px rgba(7,16,50,0.12);">

                {{-- Header --}}
                <tr>
                    <td style="background:linear-gradient(165deg, var(--theme-color-3) 0%, #4a002e 55%, #2d001c 100%); padding:36px 32px; text-align:center;">
                        <p style="margin:0 0 8px; font-size:11px; letter-spacing:0.14em; text-transform:uppercase; color:rgba(255,255,255,0.85); font-weight:bold;">Visawizer</p>
                        <h1 style="margin:0; font-size:26px; line-height:1.3; color:#ffffff; font-weight:bold;">Thank you, {{ $booking->first_name }}</h1>
                        <p style="margin:14px 0 0; font-size:15px; line-height:1.5; color:rgba(255,255,255,0.92);">Your appointment request has been received.</p>
                    </td>
                </tr>

                {{-- Reference badge --}}
                <tr>
                    <td style="padding:24px 32px 0;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td style="background-color:#f8fafc; border-left:4px solid #85BF18; padding:14px 18px; border-radius:0 6px 6px 0;">
                                    <p style="margin:0; font-size:12px; text-transform:uppercase; letter-spacing:0.08em; color:#64748b; font-weight:bold;">Reference number</p>
                                    <p style="margin:4px 0 0; font-size:20px; font-weight:bold; color:var(--theme-color-3);">#{{ $booking->id }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Intro --}}
                <tr>
                    <td style="padding:22px 32px 8px;">
                        <p style="margin:0; font-size:15px; line-height:1.65; color:#334155;">
                            Below is a summary of your contact details and appointment. If anything needs to be changed, reply to this email or contact us and quote reference <strong style="color:var(--theme-color-3);">#{{ $booking->id }}</strong>.
                        </p>
                    </td>
                </tr>

                {{-- Contact details --}}
                <tr>
                    <td style="padding:16px 32px 8px;">
                        <p style="margin:0 0 12px; font-size:12px; letter-spacing:0.1em; text-transform:uppercase; color:var(--theme-color-3); font-weight:bold; border-bottom:2px solid var(--theme-color-3); padding-bottom:8px; display:inline-block;">Your contact details</p>
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:14px;">
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; width:120px; vertical-align:top;">Name</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032; font-weight:bold;">{{ $booking->first_name }} {{ $booking->last_name }}</td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; vertical-align:top;">Phone</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032;">{{ $booking->phone }}</td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0; color:#64748b; vertical-align:top;">Email</td>
                                <td style="padding:10px 0; color:#071032;"><a href="mailto:{{ $booking->email }}" style="color:var(--theme-color-3); text-decoration:none;">{{ $booking->email }}</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Appointment --}}
                <tr>
                    <td style="padding:20px 32px 8px;">
                        <p style="margin:0 0 12px; font-size:12px; letter-spacing:0.1em; text-transform:uppercase; color:var(--theme-color-3); font-weight:bold; border-bottom:2px solid var(--theme-color-3); padding-bottom:8px; display:inline-block;">Appointment details</p>
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:14px;">
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; width:120px; vertical-align:top;">Service</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032; font-weight:bold;">{{ $booking->appointment_title }}</td>
                            </tr>
                            @if($booking->appointment_duration)
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; vertical-align:top;">Duration</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032;">{{ $booking->appointment_duration }}</td>
                            </tr>
                            @endif
                            @if($booking->appointment_price)
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; vertical-align:top;">Fee</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032;">{{ $booking->appointment_price }}</td>
                            </tr>
                            @endif
                            @if($booking->timezone)
                            <tr>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#64748b; vertical-align:top;">Time zone</td>
                                <td style="padding:10px 0; border-bottom:1px solid #e2e8f0; color:#071032;">{{ $booking->timezone }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td style="padding:10px 0; color:#64748b; vertical-align:top;">Status</td>
                                <td style="padding:10px 0; color:#071032;">
                                    <span style="display:inline-block; background-color:#f3e8f0; color:var(--theme-color-3); font-size:12px; font-weight:bold; text-transform:capitalize; padding:4px 10px; border-radius:4px;">{{ str_replace('_', ' ', $booking->status) }}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Slots --}}
                <tr>
                    <td style="padding:12px 32px 28px;">
                        <p style="margin:0 0 12px; font-size:12px; letter-spacing:0.1em; text-transform:uppercase; color:var(--theme-color-3); font-weight:bold;">Selected date(s) &amp; time(s)</p>
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                            @foreach($slotLines as $line)
                            <tr>
                                <td style="padding:12px 14px; margin-bottom:8px; background-color:#f8fafc; border-left:3px solid #85BF18; border-radius:0 4px 4px 0; font-size:14px; color:#071032; font-weight:600;">
                                    {{ $line }}
                                </td>
                            </tr>
                            <tr><td style="height:8px; font-size:0; line-height:0;">&nbsp;</td></tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                {{-- CTA --}}
                <tr>
                    <td style="padding:0 32px 32px; text-align:center;">
                        <a href="{{ url('/contact-us') }}" style="display:inline-block; background-color:var(--theme-color-3); color:#ffffff; text-decoration:none; font-size:13px; font-weight:bold; letter-spacing:0.06em; text-transform:uppercase; padding:14px 32px; border-radius:4px;">Contact Visawizer</a>
                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="background-color:#071019; padding:24px 32px; text-align:center;">
                        <p style="margin:0 0 6px; font-size:14px; font-weight:bold; color:#ffffff;">Visawizer Education and Migration Services</p>
                        <p style="margin:0 0 4px; font-size:12px; color:rgba(255,255,255,0.75); line-height:1.5;">
                            Level 7, 276 Flinders Street, Melbourne CBD VIC 3000
                        </p>
                        <p style="margin:0; font-size:12px; line-height:1.6;">
                            <a href="tel:+61451951561" style="color:#85BF18; text-decoration:none;">0451 951 561</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="mailto:info@visawizer.com.au" style="color:#85BF18; text-decoration:none;">info@visawizer.com.au</a>
                        </p>
                        <p style="margin:14px 0 0; font-size:11px; color:rgba(255,255,255,0.5);">
                            <a href="{{ url('/') }}" style="color:rgba(255,255,255,0.65); text-decoration:none;">visawizer.com.au</a>
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
