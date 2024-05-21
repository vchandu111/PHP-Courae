<?php
session_start();

// Initialize tasks if not already set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

// Adding new task from the form input
if (isset($_POST['task']) && trim($_POST['task']) != "") {
    $newTask = htmlspecialchars($_POST['task']);
    array_push($_SESSION['tasks'], $newTask);
    header('Location: file.php'); // Redirect to clear POST data
    exit();
}

// Handling task deletion
if (isset($_POST['delete'])) {
    $index = $_POST['delete'];
    if (isset($_SESSION['tasks'][$index])) {
        array_splice($_SESSION['tasks'], $index, 1);
    }
    header('Location: file.php'); // Redirect to clear POST data
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script
      src="https://kit.fontawesome.com/1362334b71.js"
      crossorigin="anonymous"
    ></script>
    <title>Simple To-Do App</title>
    <style>
        body{
            background-color:#352f5b;
        }

        h1{
            color:white;
            text-align: center;
        }
        form{
            text-align: center;
        }

        form>input[type="text"]{
            background: rgba(0, 0, 0, 0.2);
            border:0px;
            padding:15px 15px;
            color:white;
            width:50%;

        }

        input[name="submit"]{
            margin-top: 20px;
            padding:5px 10px;
            font-weight: bold;
            font-family: monospace;
            margin-bottom: 30px;;
        }

        div{
            background: rgba(0, 0, 0, 0.2);
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            display: flex;
            justify-content: space-between;
            width:55%;
            margin: auto;
            font-size: 25px;
            padding: 10px 5px 10px;
            align-items: center;
            border-radius: 20px;
            margin-top: 10px;
            color:white;
            padding-left: 20px;
        }


        .far{
            font-size: 20px;
            color:red;
            cursor: pointer;

        }

        form>button{
            border:none;
            background: rgba(0, 0, 0, 0.2);
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;


        }

        
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <form action="" method="POST">
        <input type="text" name="task" placeholder="Enter todo" />
        <br>
        <input type="submit" name="submit" value="Add Task"/>
    </form>
    
    <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
    <div>
        <?php echo ($task); ?>
        <form class="inline" action="" method="POST">
            <button type="submit" name="delete" value="<?php echo $index; ?>">
            <i class="far fa-trash-alt delete"></i>

        </button>
        </form>
    </div>
<?php endforeach; ?>

</body>
</html>
