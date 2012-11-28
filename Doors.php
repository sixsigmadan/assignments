<?php

/**
*This php file passess a row of 100 doors 100 times.
*All doors are intitially closed. 
*On each pass, n, each door that is a multiple of n
*is either opened or closed. 
*
*/

$doors = array_fill(1,100,"closed");
function openclose($n){
    for ($i=1; $i<101;){
        $doors[$i] = "open";
        $i = $i + $n;
    }
}

openclose(1); 
$doors[1] = "open";