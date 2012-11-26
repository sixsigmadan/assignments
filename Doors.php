<?php

/**
*This php file passes through a row of 100 doors 100 times.
*On each pass, a closed door is opened and an opened door is closed
*if the number of the door (1-100) is a multiple of the number of the pass
*/

$doors = array_fill(1,100,"CLOSED");

function swap($n)
{
    $i = 1;
    while ($i<101)
        {
        $doors[$i] = "OPEN";
        $i = $i + $n; 
        }
}

swap(1);
