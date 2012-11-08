<?php

include "Calculator.php";

function test($a)
{
$b=$a;
if (assert($a))
echo $b . "  success";
}

test(add(-1,-1) == -2);
test(add(-1,0) == -1);
test(add(-1,1) == 0);
test(add(0,-1) == -1); 
test(add(0,0) == 0);
test(add(0,1) == 1);
test(add(1,-1) == 0);
test(add(1,0) == 1);
test(add(1,1) == 2);
?>