<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditional statements</title>
</head>
<body>
    <?php
        $timeOfDay = "ababaa";
        // if($timeOfDay=="morning"){
        //     echo "Have some coffee";
        // }
        // elseif($timeOfDay=="noon"){
        //     echo "Have some biryani";
        // }
        // elseif($timeOfDay=="evening"){
        //     echo "Have some samosa";
        // }
        // else {
        //     echo "Have some water";
        // }

        switch($timeOfDay){
            case "morning":
                echo "have some coffee";
                break;

            case "noon":
                echo "have some biryani";
                break;

            case "evening":
                echo "have some samosa";
                break;

            default:
            echo "have some water";
                
        }
        
        $sumEvenNumbers = 0;

for ($i = 2; $i <= 20; $i += 2) {
    $sumEvenNumbers += $i ;
}

echo $sumEvenNumbers;
    
    ?>
</body>
</html>


