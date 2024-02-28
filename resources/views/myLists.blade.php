<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting ME!</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* styles.css */

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

.lists-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px #af4ca7;
    margin-top: 20px;
}

.list-item {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.list-item-content {
    flex-grow: 1;
}

.list-item strong {
    display: block;
    font-size: 1.2em;
    color: #af4ca7;
    margin-bottom: 5px;
}

.list-item p {
    margin: 0;
}

.list-item-buttons {
    display: flex;
    gap: 10px;
}

.done-btn {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.done-btn:hover {
    background-color: #45a049;
}

.delete-btn {
    background-color: #f44336; /* Red */
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.delete-btn:hover {
    background-color: #d32f2f;
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
    <h1>Waiting ME!</h1>
</header>

<main>
    <section class="lists-container">
        <h3>My Lists</h3>
        @foreach($lists as $list)
            <div class="list-item">
                <div class="list-item-content">
                    <strong>{{ $list->title }}</strong>
                    <p>{{ $list->description }}</p>
                    <p>{{ $list->created_at }}</p>
                </div>
                <div class="list-item-buttons">
                    <button class="done-btn" onclick="markAsDone({{ $list->id }})">Done</button>
                    <button class="delete-btn" onclick="deleteList({{ $list->id }})">Delete</button>
                </div>
            </div>
        @endforeach
    </section>
</main>

<footer>
    <p>&copy; 2024 Your App</p>
</footer>

<script>
function markAsDone(listId) {
    // Add logic to mark the list as done using AJAX
    $.ajax({
        url: '/mark-as-done/' + listId,
        type: 'POST',
        success: function(response) {
            alert(response.message); // Placeholder for demonstration
            // You can update the UI or perform other actions as needed
        },
        error: function(error) {
            console.error(error);
        }
    });
}

function deleteList(listId) {
    // Add logic to delete the list using AJAX
    $.ajax({
        url: '/delete-list/' + listId,
        type: 'DELETE',
        success: function(response) {
            alert(response.message); // Placeholder for demonstration
            // You can update the UI or perform other actions as needed
        },
        error: function(error) {
            console.error(error);
        }
    });
}
</script>
</body>
</html>
