<?php
/**
*This code passess a row of 100 doors 100 times.
*On each pass, if a door is a multiple of the number of the pass
*an open door will be closed or a closed door will be opened.
* 
*/

$doors = array_fill(1,100,"closed");
$doors[1] = "open";

function pass()
{
    for ($i=1; $i<101, i++)
    {
        for ($n=1; $n<101)
        {   
            $doors[$n] = "open"
            $n=$n + $i
        }
    }

}   

