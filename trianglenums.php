<?php
function xTriangleRange($min, $max) 
{    
	$sum= $min;
    for ($i = $min; $i < $max; $i++){
    	$sum = $sum+$i;
    	yield $sum;
    }
}
function printXTriangle($triangleRange)
{
    foreach ($triangleRange as $value) 
	    echo $value.", ";	
}

$a = xTriangleRange(0,15);
printXTriangle($a);
echo "\n";

$a = xTriangleRange(1,5);
printXTriangle($a);
echo "\n";

$a = xTriangleRange(1,8);
printXTriangle($a);
