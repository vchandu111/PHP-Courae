<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <?php 
       session_start();

       if(isset($_SESSION["name"])){
        echo $_SESSION["name"];
       }
       else{
        echo "Name is not set";
       }

    ?>

    <h1>Sessions</h1>
</body>
</html>