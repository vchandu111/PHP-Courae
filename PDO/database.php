<?php 
    $host = "localhost";
    $port = 3306;
    $db = "todo";
    $user = "chandra";
    $password = "Password@123";

    // mysql:host;db_name;charset

    $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8";

    try {
        $pdo = new PDO($dsn,$user,$password);

        //set pdo to throw exceptions
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        //throw $th;
        echo "Connection Failed". $e->getMessage();
    }

?>