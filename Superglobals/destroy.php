<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <?php 
       session_start();

       unset($_SESSION["name"]);

       session_destroy();

    ?>

    <h1>Destroy Sessions</h1>
</body>
</html>