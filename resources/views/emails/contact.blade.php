<!DOCTYPE html>
<html>
<head>
    <title>New Portfolio Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>New Message from Your Portfolio Website</h2>
    <hr>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p style="background: #f4f4f4; padding: 12px; border-radius: 4px;">{{ $data['message'] }}</p>
</body>
</html>