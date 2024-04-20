<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditional statements</title>
</head>
<body>
    <?php
        // for($i=0;$i<10;$i++){
        //     if($i==5){
        //         continue;
        //     }
        //     echo $i;
        //     echo "<br/>";
        // }


        // $k=0;
        // while ($k<=10){
        //     if($k==5){
        //         continue;
        //     }
        //     echo $k;
        //     echo "<br/>";
        //     $k++;
        // }

        $fruits = array('apple', 'banana', 'orange', 'pear');
$key = array_search('orange', $fruits);
print_r($key);
echo "<hr/>";

if ($key !== false) {
    echo 'The key for orange is '. $key;
} else {
    echo 'Orange is not found in the array';
}

    ?>

</body>
</html>


