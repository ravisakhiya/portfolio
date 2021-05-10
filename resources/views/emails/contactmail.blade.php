<!DOCTYPE html>
<html>
<head>
    <title>Contact Mailer</title>
</head>
<body>
    <h1>Contact Form Message</h1>
    <p>name: {{ $mail_name }}</p>
    <p>Email: {{ $mail_email }}</p>
    <p>Phone: {{ $mail_phone }}</p>
    <p>My Budget: {{ $mail_budget }}</p>
    <p>My Company is: {{ $mail_company }}</p>
    <p>my occupation: {{ $mail_manager }}</p>
    <p>Message: {{ $mail_message }}</p>
</body>
</html>