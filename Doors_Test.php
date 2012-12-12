<?php

/**
* This file tests the Doors.php file
*
*/

include "Doors.php";

if (assert (is_array($doors)))
{
    echo "\$doors is an array that exists";
}
else
{
    echo "\$doors does not exist";
}

if (hallway(2))
{
    assert
    (
    $doors[1] == "open" && 
    $doors[2] == "closed" &&
    $doors[3] == "open"
    );
}
