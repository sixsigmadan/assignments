<?php
function factor($a)
{
for ($i = $a, $j=$a; $i > 1; $i--)
{
$j=$j*($i-1);
}
return $j;
}

function divide($a,$b)
{
if ($b === 0)
return false;
return $a/$b;
}

assert(factor(4) == 24 );
assert(factor(5) == 120);
assert(factor(0) === 0);
assert(factor(1) == 1);
assert(divide(1,0) == false);
assert(divide(0,1) === 0);
assert(divide(2,2) == 1);
assert(divide(10,5) == 2);
assert(divide(0,0) === false)

?>
