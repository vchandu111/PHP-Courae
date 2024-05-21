<?php
    $numbers = [1,2,3,4,5];
    // $odd_nums = [];

    // foreach($numbers as $number){
    //     if($number%2===1){
    //         $odd_nums[] = $number;
    //     }
    // }

    // print_r($odd_nums)

    //filter(array,function)

    $odd_nums = array_filter($numbers,function($number){
        return $number%2===1;
    });
    //print_r($odd_nums);


    class Even{
        public static function isEven($num){
            return $num%2===0;
        }
    }

    $even_numbers = array_filter($numbers,['Even','isEven']);
    print_r(($even_numbers))




?>