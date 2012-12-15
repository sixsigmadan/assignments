<?php

/**
* This file tests the Doors.php file
*
*/

include "Doors.php";

//Tests to see if the $doors  exists and is an array
if (assert (is_array($doors)))
{
    echo "\$doors is an array that exists\n";
}
else
{
    echo "\$doors does not exist";
}

//Test to see if the lenght of the array is 100
if (assert(count($doors) == 100))
    {
        echo "The doors array is of length 100\n";
    }
    else 
    {
        echo "The doors array is not of lengh 100\n";
    }

//The toggle_test function takes two inputs, an array representing the hallway of doors and a literal integar representing the number
//of passes made past the hallway of doors. The function then 

function toggle_test($array_input, $pass_num)
{
    toggle($array_input, $pass_num);
    foreach($array_input as $index => $value)
        {
            if(@assert($value == "open"))
            {
                echo "Door $index is open\n";
            }
                else
                {
                    echo "Door $index is closed\n";
                }
        }
}
$test1 = array_fill(1,30,"closed");
toggle($test1, 30);
var_dump($test1);
assert($test1[1] == "open");
assert($test1[2] == "closed");
assert($test1[9] == "open");