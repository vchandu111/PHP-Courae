<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditional statements</title>
</head>
<body>
    <?php
        $age = 18;
        // if($age<18){
        //     echo "You are not eligible to vote";
        // }
        // elseif($age==18){
        //     echo "You are just eligible to vote";
        // }
        // else{
        //     echo "You are eligible to vote";
        // }

        echo $age < 18 ? "You are not eligible to vote" : "You are eligible to vote";

        echo $age < 18 ? "You are not eligible to vote" : ($age==18? "You are just eligible to vote":"You are eligible to vote")

    ?>


</body>
</html>


