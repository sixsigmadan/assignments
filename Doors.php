<?php

/**
* This file passes a row of 100 doors 100 times. 
* On each pass, each door is either opened or closed if
* the door number is a mutliple of the number of the pass. 
* On the first pass every door is opened. On the 2nd pass, every other door is opened. On the 3rd pass
* every 3rd door is opened and so on. 
* 
*
*/

// The $doors array is defined with 100 doors that are initially closed

$doors = array_fill(1,10, "Closed");

function toggle($row){
    foreach($row as $key => $value){
        $value[$key] = "Open";
    }
}

toggle($doors);
