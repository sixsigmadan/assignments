<?php

include "Calculator.php";

function test($a,$b,$c,$d)
{
    if (assert($calc->$a($b,$c) == $d))
    {   
        echo "{$a}ing {$b} and {$c} equals {$d} \n\t\t\t\t\t\t\t\t\t\t\t\t"; 
    }        
    else
    {
        echo "{$a}ing {$b} and {$c} does not equal {$d} \n\r\r\r\r\r"; 
    }
}

test(add,-1,-1,-2);
test(subtract, -1, 0, -1);
test(subtract, -1, 1, -2);
echo $calc->add(1,9);
echo $calc->subtract(9,1);
echo $calc->multiply(1,9);
?>