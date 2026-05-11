<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Course Purchase Confirmation</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8; padding:20px;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.08);">

                <!-- Header -->
                <tr>
                    <td style="background:#0d6efd; padding:20px; text-align:center; color:#ffffff;">
                        <h2 style="margin:0;">Ethics4Work</h2>
                        <p style="margin:5px 0 0;">Course Purchase Successful</p>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px;">
                        <p style="font-size:16px;">Hello <strong>{{ $name }}</strong>,</p>

                        <p style="font-size:15px; color:#444;">
                            Thank you for purchasing the course with <strong>Ethics4Work</strong>.
                            We’re excited to have you on this learning journey 
                        </p>

                        <table width="100%" cellpadding="10" cellspacing="0" style="background:#f8f9fa; border-radius:6px; margin:20px 0;">
                            <tr>
                                <td style="font-size:14px;">
                                    <strong>Course Name:</strong><br>
                                    {{ $course }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:14px;">
                                    <strong>Registered Email:</strong><br>
                                    {{ $email }}
                                </td>
                            </tr>
                        </table>

                        <p style="font-size:14px; color:#555;">
                            You can now log in and start your course anytime.
                        </p>

                        <p style="margin-top:30px; font-size:14px;">
                            Warm regards,<br>
                            <strong>Team Ethics4Work</strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#777;">
                        © {{ date('Y') }} Ethics4Work. All rights reserved.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
