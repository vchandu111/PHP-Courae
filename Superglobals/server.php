<!DOCTYPE html>
<html lang="en">
<head>
    <title>Superglobals</title>
</head>
<body>
    <?php 
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        echo "<hr/>";

        echo $_SERVER["REQUEST_METHOD"]
    ?>
</body>
</html>