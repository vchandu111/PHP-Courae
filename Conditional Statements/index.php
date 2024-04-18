<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditional statements</title>
</head>
<body>
    <?php
        $age = 12;
        if($age<18){
            echo "You are not eligible to vote";
        }
        elseif($age==18){
            echo "You are just eligible to vote";
        }
        else{
            echo "You are eligible to vote";
        }
    
    ?>
</body>
</html>


