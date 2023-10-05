<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto; background-color: #ffffff; padding: 20px;">
        <tr>
            <td style="text-align: center; padding: 20px;">
                <img src="{{ asset('img/Scino_africa_logo.png') }}" alt="Logo" style="max-width: 100%; height: auto;">
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <h1 style="font-size: 24px; color: #333;">Thanks For Contacting Us.</h1>
                <p style="font-size: 16px; color: #666;">{{ $body }}</p>
                <p style="font-size: 16px; color: #666;">If you have any questions or need assistance, feel free to contact us.</p>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 20px;">
                <a href="https://scinov.africa/" style="background-color: #007BFF; color: #ffffff; text-decoration: none; padding: 10px 20px; font-size: 18px; border-radius: 5px;">Visit Our Website</a>
            </td>
        </tr>
    </table>
</body>
</html>
