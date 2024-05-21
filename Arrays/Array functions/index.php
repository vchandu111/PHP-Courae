<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $fruits =["pineapple","banana","apple"];

      // count()
      //echo count($fruits)

      // array_reverse
        // $reverseArray = array_reverse($fruits);
        //print_r($reverseArray)

        //sort()

        // sort($fruits);
        // print_r($fruits);

        // // array_pop
        // array_pop($fruits);
        // echo "<hr/>";
        // print_r($fruits);


        //array_push
        // array_push($fruits,"orange");
        // print_r($fruits);

        // $colors =["Red"=>"R","Green"=>"G","Blue"=>"B"];


        // $flippedColor = array_flip($colors);
        // print_r($flippedColor)

        //array_intersect

        // $arr1 =["a","b","c","d","e"];
        // $arr2 = ["c","a","z","x","d"];

        // $res = array_intersect($arr1,$arr2);
        // print_r(($res));
        // echo "<br/>";

        // //array_search
        // $out = array_search("c",$arr1);
        // echo $out

        //array_slice

        //slice(array_varaible,start index,count of variables)

        // $colors = ["red","blue","black","orange","white","yellow"];

        // $out = array_slice($colors,3,3);
        // print_r($out)

        //array_rand()

        $fruits =["pineapple","banana","apple"];

        $randomIndex = array_rand($fruits);
        //print_r($randomIndex);

        $countries =[
            "France"=>"Paris",
            "Germany"=>"Berlin",
            "Italy"=>"Rome",
            "Spain"=>"Madrid"
        ];

        $randomKey = array_rand($countries);
        print_r($randomKey)


       
    ?>
</body>
</html>