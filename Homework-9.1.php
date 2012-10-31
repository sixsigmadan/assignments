<?php
function factor($a)
{
for ($i = $a, $j=$a; $i > 1; $i--)
{
$j=$j*($i-1);
}
return $j;
}
echo factor(5);
assert(factor(4) == 24 );
?>
