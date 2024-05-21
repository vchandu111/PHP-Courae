<?php
require 'database.php';
$id = $_GET['id'] ?? null;
//echo $id


$query = 'SELECT * FROM tasks where id=:id';

$stmt = $pdo->prepare($query);

$stmt->execute(['id' => $id]);

$task = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <style>
        div>div {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            width: 30%;
            padding: 20px;
            margin: 20px;
        }

        .btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;

        }

        a {
            text-decoration: none;
            background-color: green;
            padding: 10px;
            color: white;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div>
        <div>
            <h1>
                <?= $task['title'] ?>
            </h1>
            <p>
                <?= $task['description'] ?>
            </p>
            <!-- Edit form -->
            <a href="edit.php?id=<?= $task['id'] ?>">Edit</a>
            <!-- Delete form -->
            <form action="delete.php" method="POST">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">
                <input class="btn" type="submit" value="Delete" name="submit"></input>
            </form>

        </div>



    </div>

</body>

</html>