<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #ffffff;
        }

        header {
            background-color: #ffffff;
            color: #a02aad;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #a02aad;
            padding: 10px 0;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        section.hero {
            background-image: url('/storage/7c4846de63c2636d5d6886d9fe4764c8.jpg'); /* Set the image URL */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 230px 10px;
        }

        section.hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        section.hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        section.features {
            background-color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        footer {
            background-color: #a02aad;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome Again</h1>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="{{route('loginPage')}}">Login</a>

    </nav>

    <section class="hero">

    </section>

    <footer>
        <p>&copy; 2024 Our Platform. All rights reserved.</p>
    </footer>

</body>
</html>
