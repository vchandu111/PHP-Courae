<?php
require 'database.php';

//prepare a select statement
$query = 'SELECT * FROM tasks';
$stmt = $pdo->prepare($query);

//ececute the statement
$stmt->execute();

// fetch the results
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);



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
    </style>
</head>

<body>
    <div>
        <?php foreach ($tasks as $task) : ?>
            <div>
                <h1>
                    <?= $task['title'] ?>
                </h1>
                <p>
                    <?= $task['description'] ?></a>
                </p>
                <a href="task.php?id=<?= $task['id'] ?>">More Details</a>
            </div>




        <?php endforeach ?>
    </div>

</body>

</html>