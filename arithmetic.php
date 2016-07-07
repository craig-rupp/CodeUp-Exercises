<?php


function validateNumeric($a, $b, $validateDivisionByZero = false) {
	if(is_numeric($a) && is_numeric($b)) {
		echo "Your outcom is :\n";
	}
	elseif(!is_numeric($a) || !is_numeric($b)){
		fwrite(STDERR, "Both {$a} and {$b} must be numbers to perform the desired math function");
		exit(1);
	}
	if ($validateDivisionByZero) {
		if ($b == 0) {
		fwrite(STDERR, "Can't Divide by Zero");
		exit(1);
		}
	}
}
function add($a, $b)
{
	validateNumeric($a, $b);
	return $a + $b;
}

function subtract($a, $b)
{
	validateNumeric($a, $b);
	return $a - $b;	
}

function multiply($a, $b)
{
	validateNumeric($a, $b);
	return $a * $b;
}

function divide($a, $b)
{  
	if($b===0){
		validateNumeric($s,$b,true);
	} else{
		return $a / $b;	
	}
	
}
function modulus($a, $b)
{
	if($b===0){
		validateNumeric($s,$b,true);
	} else{
		return $a % $b;	
	}
}

// function throwErrorMessage($a, $b){
// 	if(is_numeric($a) && is_numeric($b) && !$b == 0){
// 		echo add($a,$b);
// 		echo subtract($a,$b);
// 		echo multiply($a,$b);
// 		echo divide($a,$b);
// 		echo modulus($a,$b);
// 	} elseif (!is_numeric($a) || !is_numeric($b)){	
// 		echo gettype($a), PHP_EOL;
// 		echo gettype($b), PHP_EOL;
// 		fwrite(STDERR, "Both {$a} and {$b} must be numbers to perform this function");
// }

// Add code to test your functions here

$a = 4;
$b = 0;

echo add($a,$b), PHP_EOL;
echo subtract($a,$b), PHP_EOL;
echo multiply($a, $b), PHP_EOL;
echo divide($a, $b), PHP_EOL;
echo modulus($a, $b), PHP_EOL;










// function paramTest($paramA, $paramB)
// {
//     echo "Param A is: $paramA\n";
//     echo "Param B is: $paramB\n";
// }

// $paramA = 'Alpha';
// $paramB = 'Beta';

// paramTest($paramA, $paramB);
// echo PHP_EOL;
// paramTest($paramB, $paramA);



