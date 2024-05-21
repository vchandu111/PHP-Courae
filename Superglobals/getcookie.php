<!DOCTYPE html>
<html lang="en">
<head>
    <title>Superglobals</title>
</head>
<body>
    <?php 
        //print_r($_COOKIE)

       // echo $_COOKIE["player"];

       if(isset($_COOKIE["player"])){
            echo $_COOKIE["player"];
       }
       else{
            echo "Anonymous player";
       }
        
    ?>

    <h1>Cookies</h1>
</body>
</html>