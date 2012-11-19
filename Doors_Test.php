<?php

/**
*This file test the Doors.php file
*
*
*/
include "Doors.php";
assert ($doors);
assert ($doors[1] == "Open");
assert ($doors[2] == "Open");
