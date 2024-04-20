<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditional statements</title>
</head>
<body>
    <?php
        for($i=0;$i<=100;$i++){
            if($i%3==0 && $i%5==0){
                echo "Fizz Buzz";
            }
            elseif($i%3==0){
                echo "Fizz";
            }
            elseif($i%5==0){
                echo "Buzz";
            }
            else{
                echo $i;

            }

            echo "<br/>";
        }



    ?>


</body>
</html>


