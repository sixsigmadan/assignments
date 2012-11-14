<?php
/**
*
*Doors_Test.php tests the Doors.php file. 
*
*
*
*/
include "Doors.php";
assert ($doors);
assert (count($doors) == 100);
assert ($doors[1] == "OPEN");
assert ($doors[2] == "OPEN");
