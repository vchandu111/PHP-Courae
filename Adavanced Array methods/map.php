<?php
    $lengths = [10,20,30];
    // $areas =[];

    // foreach($lengths as $length){
    //      $areas[]= $length*$length;
    // }

    // print_r($areas)

    //map(function,array)


    function square($length){
        return $length*$length;
    }

    $areas = array_map('square',$lengths);

    print_r(($areas))



?>