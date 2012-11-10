<?php

include "Calculator.php";

function test($a,$b,$c,$d)
{
if (assert($a($b,$c) == $d))
echo $a . "ing "  . $b . " and " . $c  . " is succussful" . "\n"; 
else
echo $a . "ing "  . $b . " and " . $c  . " is unsuccussful" . "\n";
}

test("add",-1,-1,-2);
test("subtract", -1, 0, -1);
?>