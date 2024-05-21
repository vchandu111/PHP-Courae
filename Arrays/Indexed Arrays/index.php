<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = array(1,2,3);
        $numbers = [12,26,33];
        //var_dump($numbers)
        $numbers[0]=111;
        unset($numbers[1])
        var_dump($numbers)
    
    ?>
</body>
</html>