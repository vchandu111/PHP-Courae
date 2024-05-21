<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $car =[
        "brand"=>"Suzuki",
        "model"=> "Brezza",
        "year"=>2023
       ];

       //add new elements
       $car["color"]="red";
       $car["transmision"]="manual";

       //access

       $brandName = $car["brand"];
       echo $brandName;
       echo '<br/>';

       //change values
       $car ["color"]="blue";

       print_r($car)
    
    ?>
</body>
</html>