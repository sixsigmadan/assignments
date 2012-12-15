<?php

/**
* This file passes a row of 100 doors 100 times. 
* On each pass, each door is either opened or closed if
* the door number is a mutliple of the number of the pass. 
* On the first pass every door is opened. On the 2nd pass, every other door is opened. On the 3rd pass
* every 3rd door is opened and so on. 
*/

// The $doors array is defined with 100 doors that are initially closed

$doors = array_fill(1,100, "closed");

// The toggle function passes the doors defined by the $array paramater a number of times as defined by the $pass
// parameter. On each pass, if a door's number is a mutliple of the pass, it is either
//opened or closed. 

function toggle(&$input, $pass = "1")
{
    for ($i=1; $i<=$pass; $i++) 
        {
            for ($stop = $i; $stop <= count($input); $stop = $stop + $i)
                 {
                    if ($input[$stop] == "open")
                        {
                            $input[$stop] = "closed"; 
                        }
                            else
                            {
                                $input[$stop] = "open";    
                            }
                 }
        }
        return $input;
}
toggle($doors, 100);