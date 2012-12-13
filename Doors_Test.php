<?php

/**
* This file tests the Doors.php file
*
*/

include "Doors.php";

if (assert (is_array($doors)))
{
    echo "\$doors is an array that exists\n";
}
else
{
    echo "\$doors does not exist";
}

//Test to see if each door is open
foreach($doors as $index => $value)
{
    if(assert($value == "open"))
    {
        echo "Door $index is open\n";
    }
}

