<?php
/**
*This code simulates walking down a row of doors represented by an array
*The row of doors is passed 100 times
*On each pass, each door that is a multiple of the number of pass
*is either opened or closed. 
*/

$doors = array_fill(1,100,"closed");
$doors[1] = "open";
function pass()
    {
    for ($i=1; $i<101; $i++)
        {
        $doors[$i] == "open";       
        }
}