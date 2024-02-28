<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #af4ca7;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .user-info {
            text-align: center;
        }

        .user-info img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-actions {
            max-width: 300px;
        }

        .user-actions h3 {
            border-bottom: 1px solid #af4ca7;
            padding-bottom: 5px;
        }

        .user-actions ul {
            list-style: none;
            padding: 0;
        }

        .user-actions li {
            margin: 10px 0;
        }

        .user-actions .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #af4ca7;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .user-actions .input-container {
            margin-bottom: 15px;
        }

        .user-actions form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .user-actions form input,
        .user-actions form textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .user-actions form button {
            background-color: #af4ca7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: #af4ca7;
            color: white;
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
    <h1>User Profile</h1>
</header>

<main>
    <section class="user-info">
        <img src="{{ asset('storage/photos/' . Auth::user()->photo) }}" alt="User Avatar">
        <h2>{{ Auth::user()->name }}</h2>
        <p>{{ Auth::user()->email }}</p>
        <h3>What U Want To Do ?</h3>
        <nav class="user-actions">
        <ul>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="{{route('lists')}}">My List</a></li>
            <li><a href="#">Done List</a></li>
            <li><a href="#">Deleted List</a></li>
            <li>@auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth</li>
        </ul>
        </nav>
    </section>

    <section class="user-actions">
        <!-- Form container -->
        <div class="form-container">
            <form action="{{ route('saveList') }}" method="POST">
                @csrf
                <h3>Add Your Daily Works</h3>
                <!-- Input container for title -->
                <div class="input-container">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter title...">
                </div>
                <!-- Input container for description -->
                <div class="input-container">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" placeholder="Enter your List..."></textarea>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 Your App</p>
</footer>

</body>
</html>
