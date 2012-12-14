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

//Test to see if the lenght of the array is 10
if (count($doors) == 10)
    {
        echo "The doors array is of length 10\n";
    }
    else 
    {
        echo "The doors array is not of lengh 10\n";
    }

//Test to see if each door is open
toggle($doors);
foreach($doors as $index => $value)
{
    if(assert($value == "open"))
    {
        echo "Door $index is open\n";
    }
}

//Test to see if ever 2nd door is closed by passing the $toggle function 
//1 for the $pass parameter

foreach($doors as $index => $value)
{
   if ($index % 2 == 0)
    {
        if(@assert($value == "closed"))
            {
                echo "Door $index is closed\n";
            }
            else
            {
                echo "Door $index is not closed\n";
            }
    }
}