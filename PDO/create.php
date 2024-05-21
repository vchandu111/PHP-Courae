<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = 'INSERT INTO tasks (title,description) VALUES (:title, :description)';
    $stmt = $pdo->prepare($sql);

    $params = [
        'title' => $title,
        'description' => $description
    ];
    $stmt->execute($params);
    header('Location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            font-size: 14px;
        }

        .form-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Include padding and border in the element's width/height */
        }

        textarea {
            resize: vertical;
            /* Allow vertical resizing only */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-title">Create Todo</div>
        <form method="POST">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter post title" required>
            </div>
            <div class="input-group">
                <label for="body">Description</label>
                <textarea id="body" name="description" rows="4" placeholder="Enter Description" required></textarea>
            </div>
            <input type="submit" value="Submit">
            <a href="/posts" class="back-link">Back to Todo's</a>
        </form>
    </div>
</body>

</html>