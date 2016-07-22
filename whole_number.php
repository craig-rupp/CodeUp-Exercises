<?php
do{
	echo "Enter a number between 1 and 9" . PHP_EOL;
	$selection = trim(fgets(STDIN));
	switch($selection){
		case 1 :
		echo "ONE" . PHP_EOL;
		break;
		case 2 :
		echo "TWO" . PHP_EOL;
		break;
		case 3 :
		echo "THREE" . PHP_EOL;
		break;
		case 4 :
		echo "FOUR" . PHP_EOL;
		break;
		case 5 :
		echo "FIVE" . PHP_EOL;
		break;
		case 6 :
		echo "SIX" . PHP_EOL;
		break;
		case 7 :
		echo "SEVEN" . PHP_EOL;
		break;
		case 8 :
		echo "EIGHT" . PHP_EOL;
		break;
		case 9 :
		echo "NINE" . PHP_EOL;
		break;
	}
} while (is_numeric($selection) && $selection <= 9);



fwrite(STDOUT, "Please enter the first of two positive integers" . PHP_EOL);
$firstNumber = intval(fgets(STDIN));
fwrite(STDOUT, "Please enter your second of two positive integers" . PHP_EOL);
$secondNumber = intval(fgets(STDIN));
if(is_numeric($firstNumber) && is_numeric($secondNumber)){
	gcd($firstNumber, $secondNumber);
}
function gcd($firstNumber, $secondNumber){
	while($secondNumber != 0){
		$t = $firstNumber % $secondNumber;
		$firstNumber = $secondNumber;
		$secondNumber = $t;
	}
	return $firstNumber;
}


$x = 0;    
$y = 1;
$fibSequ = []; 

for($i=0; $i<=15; $i++)    
{    
    $z = $x + $y;
    array_push($fibSequ, $z);
    $x=$y;       
    $y=$z;     
} 
    print_r($fibSequ);             



fwrite(STDOUT, "Please enter a position which whill return the relative position in which you would like to see the corresponding Fibonnaci equivalent : ");
$enteredFib = intval(fgets(STDIN));


// $fibarray = array(0, 1);
// $fibarray[2] = $fibarray[0] + $fibarray[1];
// for ( $i=2; $i<=20; ++$i ) {
//  $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
// }

function fibonacciSequence($enteredFib){
 $fibarray = array(0, 1);
 for ( $i=2; $i<=$pos; ++$i ) {
  $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
 }
 return $fibarray[$pos];
 print_r($fibarray);
}









