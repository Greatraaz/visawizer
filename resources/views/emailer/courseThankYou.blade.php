<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Visawizer</title>
</head>
<body style="margin:0; padding:0; background:#f4f7f6; font-family:Arial, sans-serif; color:#1f2937;">
    <div style="max-width:640px; margin:32px auto; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 30px rgba(15,23,42,0.08);">
        <div style="background:linear-gradient(135deg, var(--theme-color-3) 0%, #be182f 100%); padding:28px 32px; color:#ffffff; text-align:center;">
            <h1 style="margin:0; font-size:28px; line-height:1.2;">Thank you for contacting Visawizer</h1>
        </div>

        <div style="padding:32px;">
            <p style="margin:0 0 16px; font-size:16px; line-height:1.7;">
                Hi <strong>{{ $name }}</strong>,
            </p>

            <p style="margin:0 0 16px; font-size:16px; line-height:1.7;">
                We have received your enquiry for <strong>{{ $courseName ?: 'Visawizer services' }}</strong>. Our team will review your details and get back to you with the next right step as soon as possible.
            </p>

            <div style="margin:24px 0; padding:20px; border-radius:12px; background:#f8fbfa; border:1px solid #e5eeea;">
                <h2 style="margin:0 0 12px; font-size:18px; line-height:1.4; color:#0f172a;">What happens next</h2>
                <ul style="margin:0; padding-left:20px; font-size:15px; line-height:1.7; color:#475569;">
                    <li>We review your enquiry and requirements carefully.</li>
                    <li>We identify the most relevant visa, study, or migration pathway options.</li>
                    <li>Our team contacts you to discuss the next steps.</li>
                </ul>
            </div>

            <p style="margin:0 0 16px; font-size:16px; line-height:1.7;">
                If your matter is urgent, you can reply to this email or contact us directly and we will assist you further.
            </p>

            <p style="margin:24px 0 0; font-size:16px; line-height:1.7;">
                Regards,<br>
                <strong>Team Visawizer</strong><br>
                Email: <a href="mailto:{{ config('site.email1') }}" style="color:var(--theme-color-3); text-decoration:none;">{{ config('site.email1') }}</a><br>
                Phone: <a href="tel:{{ trim(config('site.phone1')) }}" style="color:var(--theme-color-3); text-decoration:none;">{{ trim(config('site.phone1')) }}</a><br>
                Address: {{ config('site.address1') }}
            </p>
        </div>
    </div>
</body>
</html>
