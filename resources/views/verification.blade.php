<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('/storage/7c4846de63c2636d5d6886d9fe4764c8.jpg'); /* Set the image URL */
            background-size: cover; /* Ensure the image covers the entire background */
        }

        .verification-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .verification-container h2 {
            text-align: center;
            color: #af4ca7;
        }

        .verification-message {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }

        .verification-input {
            width: 100%;
            padding: 8px;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .done-btn {
            background-color: #af4ca7;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .done-btn:hover {
            background-color: #8e3c8b;
        }

        .verification-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #af4ca7;
        }
    </style>
</head>
<body>

<div class="verification-container">
    <h2>Account Verification</h2>
    <p class="verification-message">Thank you for signing up! Please enter the verification code sent to your email:</p>

    <input type="text" class="verification-input" placeholder="Enter Verification Code" required>

    <div class="form-group">
        <button type="button" class="done-btn" onclick="window.location='{{ route('resetPasswordPage') }}'">Done!</button>
    </div>

    <a href="{{ route('verificationPage') }}" class="verification-link">Resend Verification Code</a>
</div>

</body>
</html>
