<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Ethics4Work</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #1e3a8a; padding: 20px; text-align: center; color: #ffffff;">
                            <h1 style="margin: 0; font-size: 28px;">Welcome to Ethics4Work!</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px; color: #333333;">
                            <h2 style="color: #1e3a8a;">Hello {{ $name }},</h2>
                            <p style="font-size: 16px; line-height: 1.5;">
                                Your account has been created successfully. We are excited to have you onboard at <strong>Ethics4Work</strong>.
                            </p>

                            <p style="font-size: 16px; line-height: 1.5;">
                                <strong>Login Email:</strong> {{ $email }}<br>
                                <strong>Password:</strong> {{ $password }}
                            </p>

                            <p style="font-size: 16px; line-height: 1.5;">
                                Click the button below to login and explore:
                            </p>

                            <p style="text-align: center; margin: 30px 0;">
                                <a href="{{ url('login') }}" style="background-color: #1e3a8a; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 5px; font-weight: bold; display: inline-block;">
                                    Login Now
                                </a>
                            </p>

                            <p style="font-size: 14px; color: #777777; line-height: 1.5;">
                                If you did not create this account, please ignore this email.
                            </p>

                            <p style="font-size: 16px; line-height: 1.5;">
                                Thank you,<br>
                                <strong>Ethics4Work Team</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f0f0f0; text-align: center; padding: 15px; font-size: 12px; color: #777777;">
                            &copy; {{ date('Y') }} Ethics4Work. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
