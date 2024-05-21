<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <?php 
       session_start();

       $_SESSION["name"]="John";

      // print_r(($_SESSION));

       echo $_SESSION["name"]

    ?>

    <h1>Sessions</h1>
</body>
</html>