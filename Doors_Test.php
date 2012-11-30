<?php
/**
*This file tests the Doors.php code
*
*/

include "Doors.php";

assert ($doors);
assert ($doors[1] == "open");
assert ($doors[2] == "open");

