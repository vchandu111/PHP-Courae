<?php 
    session_start();


    $_SESSION["todos"] = []

    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="">
        <input type="text" name="todo_name" id="" placeholder="Enter Todo">
        <br>
        <input type="submit" name="submit" value="Add Task">
    </form>
</body>
</html>