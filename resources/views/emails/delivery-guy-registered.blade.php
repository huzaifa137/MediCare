<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ Helper::app_name() }}</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #fff; color: #333;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #e0f7fa; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="background-color: #00CFDD; padding: 20px; text-align: center;">
                            <h1 style="margin: 0; color: #1b1c1d; font-size: 24px;">Welcome to {{ Helper::app_name() }}!
                            </h1>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 30px;">
                            <p style="font-size: 16px; color: #333;">
                                <strong>Dear {{ $data['fullName'] ?? 'Delivery Partner' }},</strong>
                            </p>

                            <p style="font-size: 15px; color: #555;">
                                We are excited to welcome you to <strong>{{ Helper::app_name() }}</strong> as one of our
                                trusted delivery personnel. Your account has been successfully created and you are now
                                ready to get started!
                            </p>

                            <h3 style="color: #00CFDD;">Your Account Details:</h3>
                            <ul style="list-style: none; padding-left: 0; color: #555; font-size: 15px;">
                                <li><strong>Full Name:</strong> {{ $data['fullName'] ?? '—' }}</li>
                                <li><strong>Email:</strong> {{ $data['email'] ?? '—' }}</li>
                                <li><strong>Username:</strong> {{ $data['username'] ?? '—' }}</li>
                                <li><strong>Password:</strong> {{ $data['password'] ?? '—' }}</li>
                                <li><strong>Phone:</strong> {{ $data['phoneNumber'] ?? '—' }}</li>
                                <li><strong>Gender:</strong> {{ ucfirst($data['gender'] ?? '—') }}</li>
                            </ul>

                            <h3 style="color: #00CFDD;">Vehicle Information:</h3>
                            <ul style="list-style: none; padding-left: 0; color: #555; font-size: 15px;">
                                <li><strong>Type:</strong> {{ $data['vehicleType'] ?? '—' }}</li>
                                <li><strong>Registration Number:</strong> {{ $data['vehicleNumber'] ?? '—' }}</li>
                                <li><strong>Insurance:</strong> {{ $data['vehicleInsurance'] ?? '—' }}</li>
                            </ul>

                            <h3 style="color: #00CFDD;">Availability & Schedule:</h3>
                            <ul style="list-style: none; padding-left: 0; color: #555; font-size: 15px;">
                                <li><strong>Available Days:</strong> {{ $data['availableDays'] ?? '—' }}</li>
                                <li><strong>Available Hours:</strong> {{ $data['availableHours'] ?? '—' }}</li>
                            </ul>

                            <p style="font-size: 15px; color: #555;">
                                With your account, you can now access your dashboard to view delivery assignments,
                                manage your schedule, and keep your documents up to date.
                            </p>

                            <p style="font-size: 15px; color: #555;">
                                We’re delighted to have you as part of our logistics network and look forward to a
                                successful collaboration. Thank you for joining our team of reliable delivery partners!
                            </p>

                            <p style="font-size: 15px; color: #555;">
                                Warm regards,<br>
                                <strong>The {{ Helper::app_name() }} Team</strong>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background-color: #b3e5fc; text-align: center; padding: 15px; font-size: 13px; color: #555;">
                            &copy; {{ date('Y') }} {{ Helper::app_name() }}. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
