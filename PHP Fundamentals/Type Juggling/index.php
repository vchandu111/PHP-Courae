<?php 
    $number1=6;
    $number2=10;
    $number3="20";
    $bool1=true;
    $bool2 = false;

    $result = $number1+$number3; // string to int
    $result = $number3+$number3; // string to int
    $result = $number1+$bool1; // bool to int
    $result = $number1+$bool2; // bool to int



    var_dump($result)


?>