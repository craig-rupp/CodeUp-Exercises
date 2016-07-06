<?php

$a = 15;
$b = 13;

function add($a, $b)
{
    return $a + $b;

}

function subtract($a, $b)
{
    // Add code here
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b){
	return $a % $b;

}

// Add code to test your functions here

$a = 4;
$b = 11;

echo add($a,$b), PHP_EOL;
echo subtract($a,$b), PHP_EOL;
echo multiply($a, $b), PHP_EOL;
echo divide($a, $b), PHP_EOL;
echo modulus($a, $b), PHP_EOL;


function paramTest($paramA, $paramB)
{
    echo "Param A is: $paramA\n";
    echo "Param B is: $paramB\n";
}

$paramA = 'Alpha';
$paramB = 'Beta';

paramTest($paramA, $paramB);
echo PHP_EOL;
paramTest($paramB, $paramA);



