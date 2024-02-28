<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        .forgot-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .forgot-container h2 {
            text-align: center;
            color: #af4ca7;
        }

        .forgot-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            background-color: #af4ca7;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #af4ca7;
        }

        .login-link {
            text-align: center;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="forgot-container">
    <h2>Forgot Password</h2>
    <form class="forgot-form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <button type="submit" onclick="window.location='{{ route('verificationPage') }}'">Send!</button>
        </div>
    </form>

    <p class="login-link"><a href="{{ route('loginPage') }}">Back to Login</a></p>
</div>

</body>
</html>
