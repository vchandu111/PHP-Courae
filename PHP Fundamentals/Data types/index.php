<?php 
    // string
    $country = "India";
    $country2 = "USA";
    var_dump($country2);
    echo "<br/>";

    //integer
    $age = 32;
    var_dump($age);
    echo "<br/>";

    //float
    $rating = 3.5;
    var_dump($rating);
    echo "<br/>";

    //Boolean
    $isLoggedIn = true;
    var_dump($isLoggedIn);
    echo "<br/>";

    //Array
    $names = ["John","Jack",88,false];
    var_dump($names);
    echo "<br/>";

    //Object
    $person = new stdClass();
    var_dump($person);
    echo "<br/>";

    //Null
    $iphone=null;
    var_dump($iphone);
    echo "<br/>";

    //Resource
    $file = fopen('name.txt','r');
    var_dump($file);

?>