<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visawizer - Thank You</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family:Arial, sans-serif;">

    <div style="max-width:600px; margin:30px auto; background:white; border-radius:12px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <div style="background:var(--theme-color-3); padding:25px 30px; color:white;text-align: center;">
            <h2 style="margin:0; font-size:24px;">Thank you for registering!</h2>
        </div>

        <!-- Body -->
        <div style="padding:30px; color:#333;">

            <p style="font-size:16px; line-height:1.6;">
                Hi <strong>{{ $name }}</strong>,  
            </p>

            <p style="font-size:16px; line-height:1.6;">
                Your registration has been successfully completed for the event <strong>{{ $event }}</strong> with <strong>Visawizer</strong>.
                We are excited to have you join us for this upcoming session.
            </p>

            <p style="font-size:16px; line-height:1.6;">
                If you need any assistance, feel free to reach out.
                We look forward to seeing you at the event!
            </p>

            <p style="font-size:16px; line-height:1.6;">
                Warmly,<br>
                <strong>Team Visawizer</strong><br>
                Ethics that Works at Work<br>
                Email: <a href="mailto:{{ config('site.email1') }}" style="color:var(--theme-color-3);">{{ config('site.email1') }}</a><br>
                Web: <a href="https://Visawizer.com" style="color:var(--theme-color-3);">https://Visawizer.com</a>
            </p>

        </div>
    </div>

</body>
</html>
