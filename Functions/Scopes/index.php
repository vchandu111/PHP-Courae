<!DOCTYPE html>
<html lang="en">
<head>
    <title>Functions</title>
</head>
<body>
    <?php
     $message = "hello world";

     $sayHello = function($name) use($message){
        echo "$message $name";
     };

     $sayHello("Chandra")


    
    ?>
</body>
</html>