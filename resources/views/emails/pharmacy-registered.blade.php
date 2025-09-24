<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{Helper::app_name()}}</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #fff; color: #333;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #e0f7fa; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="background-color: #00CFDD; padding: 20px; text-align: center;">
                            <h1 style="margin: 0; color: #1b1c1d; font-size: 24px;">
                                Welcome to {{ Helper::app_name() }}!
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">
                            <p style="font-size: 16px; color: #333;">
                                <strong>Dear {{ $data['owner'] }},</strong>
                            </p>

                            <p style="font-size: 15px; color: #555;">
                                We are excited to let you know that your pharmacy has been successfully registered on
                                <strong>{{ Helper::app_name() }}</strong>. Welcome aboard!
                            </p>

                            <h3 style="color: #6610F2;">Pharmacy Details:</h3>
                            <ul style="list-style: none; padding-left: 0; color: #555; font-size: 15px;">
                                <li><strong>Pharmacy Name:</strong> {{ $data['pharmacyName'] }}</li>
                                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                                <li><strong>Password:</strong> {{ $data['password'] }}</li>
                                <li><strong>Phone Number:</strong> {{ $data['phone'] }}</li>
                            </ul>

                            <p style="font-size: 15px; color: #555;">
                                You can now log in to your account and manage your pharmacy’s profile, services, and
                                more.
                                We’re here to support you in delivering the best healthcare experience to your
                                customers.
                            </p>

                            <p style="font-size: 15px; color: #555;">Warm regards,<br>
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