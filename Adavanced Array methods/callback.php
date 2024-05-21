<?php

function eatBreakfast($item, $time, $doBrush)
{
    doBrush();
    echo "<br/>";
    echo "I will eat $item as my breakfast at $time am";
}


function doBrush()
{
    echo "First brush your teeth";
}

eatBreakfast("idly", 9, 'doBrush');
