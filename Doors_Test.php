<?php
/**
*This code tests the Doors.php file
*
*
*/

include "Doors.php";

assert ($doors);
assert ($doors[1] == "open");
assert ($doors[2] == "open");