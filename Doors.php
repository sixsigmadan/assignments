<?php

/**
*
*This function changes the state of a row of doors to either open or closed
*A series of passes are made past the row of doors
*Whether or not a door is opened or closed depends on both the current
*state of the door and the number of the pass
*On the nth pass, any door that is a multiple of n has its state changed
*
*/

$doors = array_fill(1,100,'CLOSED');
