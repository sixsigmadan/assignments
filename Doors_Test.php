<?php

/**
* This file tests the Doors.php file
*
*/

include "Doors.php";

if (assert ($doors))
{
    echo "\$doors is an array that exists";
}

foreach ($doors as $key => $value){
    if (assert ($value == "Open")){
        echo "$key is $value \n";
    }
        else{
        echo "$key is $value \n" ;
        }
}
    var_dump ($doors);