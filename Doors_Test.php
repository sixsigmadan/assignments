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

foreach ($doors as $key => $value){
    assert ($value == "open");
    echo "$key is $value \n" ;   
}
    var_dump ($doors);