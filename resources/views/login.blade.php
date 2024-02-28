<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-container h2 {
            text-align: center;
            color: #af4ca7;
        }

        .login-form {
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
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form class="login-form" method="POST" action="{{route('login')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
            <p class="register-text"><a href="{{route('forgetPasswordPage')}}"> Forget Your Password?</a></p>
            <p class="signup-text">Don't have an account? Sign Up below.</p>
            <button type="button" class="signup-btn" onclick="window.location='{{ route('signupPage') }}'">Sign Up</button>
            <p class="home-text"><a href="{{route('home')}}">Back To Home Page</a></p>
        </div>
    </form>
</div>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            position: 'center', // Position the toast at the top-right corner
            showConfirmButton: false, // Do not show a confirmation button
            timer: 3000 // Auto-close the toast after 3 seconds
        });
    </script>
    @endif
</body>
</html>
