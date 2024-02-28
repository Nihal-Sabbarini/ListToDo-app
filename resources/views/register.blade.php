<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
            background-image: url('/storage/7c4846de63c2636d5d6886d9fe4764c8.jpg');
            background-size: cover;
        }

        .register-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .register-container h2 {
            text-align: center;
            color: #af4ca7;
        }

        .register-form {
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

        .error-message {
            color: #af4ca7;
            margin-top: 10px;
        }
    </style>
    <script>
        // Add this JavaScript code to automatically hide the error message on input change
        document.addEventListener('DOMContentLoaded', function() {
            var emailInput = document.getElementById('email'); // Change 'email' to the actual ID of your email input

            emailInput.addEventListener('input', function() {
                var errorMessage = document.querySelector('.error-message');

                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var emailInput = document.getElementById('password'); // Change 'email' to the actual ID of your email input

            emailInput.addEventListener('input', function() {
                var errorMessage = document.querySelector('.error-message');

                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
            });
        });
    </script>
</head>
<body>

    <div class="register-container">
        <h2>Sign Up</h2>
        <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>

            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>

        <p class="login-link">Already have an account? <a href="{{ route('loginPage') }}">Login here</a>.</p>
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
