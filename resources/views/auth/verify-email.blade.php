<!-- resources/views/auth/verify-email.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Email Verification</h2>
    <p>Please check your email and click the verification link.</p>
    @if (session('message'))
        <p style="color: green">{{ session('message') }}</p>
    @endif
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Resend Verification Link</button>
    </form>
</body>
</html>
