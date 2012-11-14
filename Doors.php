<?php
/**
*The Doors.php file traverses a row of doors numbered 
*1 through 100 100 times. On the nth pass, doors that have a number
*that is a multiple of n will either be opend or closed.
*
*
*/

$doors = array_fill(1,100,"CLOSED");
function open_doors()
{
    for (i=1, 1<100, i++){
        if ($doors[i] == "OPEN"){
            $doors[i] = "CLOSED";
            else
                $doors[i] = "OPEN";
        }
    }
}
