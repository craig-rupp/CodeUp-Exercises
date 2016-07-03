<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if ($x < $y && $y < $z){
	echo "{$x} < {$y} < {$z}\n";
}


// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".

if($x < $x || $x < $z){
	echo "{$x} is less than {$x} OR {$x} is less than {$z}\n";
}

// TODO:
// repeat the if statement for $y and $z.
if($x < $y || $y < $z){
	echo "{$x} is less than {$y} OR {$y} is less than {$z}\n";
}
if ($x < $z || $z < $z){
	echo "{$x} is less than {$z} OR {$z} is less than {$z}\n";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if ($x < $x && $x < $z){
	echo "{$x} is less than {$x} and {$x} is less than {$z}\n";
}

// TODO:
// repeat the if statement for $y and $z.
if ($x < $y && $y < $z){
	echo "0 is less than {$y} and {$y} is less than 10\n";
}

if ($x < $z && $z < $z){
	echo "0 is less than {$z} and {$z} is less than 10\n";
}
