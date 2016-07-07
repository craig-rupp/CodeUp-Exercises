<?php

// TODO: Create your inspect() function here

function inspect($a){
	// settype($num3, "string");
	// echo gettype($num3), PHP_EOL;
	// echo "The interger is 12.\n";
	if(is_numeric($a)){
		echo gettype($a), PHP_EOL;
		echo "The " . gettype($a) . " is an " . $a . PHP_EOL;
	}
	elseif(is_string($a) || is_scalar($a)){
		echo gettype($a), PHP_EOL;
		echo "The " . gettype($a) . " is an " . $a . PHP_EOL;
	}
	elseif(is_string($a) && $a == ''){
		echo gettype($a), PHP_EOL;
		echo "The string is empty";
	}
	elseif(is_null($a)){
		echo "The value is null\n";
	} 
	elseif(is_array($a) && $a == []){
		echo "The value is an empty array\n";
		// var_dump($a);
	}elseif(is_array($a)){
		var_dump($a);
	}elseif(is_bool($a) && $a == true){
		echo gettype($a), PHP_EOL;
		echo "TRUE";
	}elseif(is_bool($a) && $a == false){
		echo gettype($a), PHP_EOL;
		echo "FALSE";
	}
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

inspect($string1);
inspect($string2);
inspect($array1);
inspect($array2);
inspect($bool1);
inspect($bool2);
inspect($num1);
inspect($num2);
inspect($num3);
inspect($num4);
inspect($null);

// TODO: After each echo statement, use inspect() to output the variable's type and its value

// echo 'Inspecting $num1:' . PHP_EOL;

// echo 'Inspecting $num2:' . PHP_EOL;

// echo 'Inspecting $num3:' . PHP_EOL;

// echo 'Inspecting $num4:' . PHP_EOL;

// echo 'Inspecting $null:' . PHP_EOL;

// echo 'Inspecting $bool1' . PHP_EOL;

// echo 'Inspecting $bool2' . PHP_EOL;

// echo 'Inspecting $string1' . PHP_EOL;

// echo 'Inspecting $string2' . PHP_EOL;

// echo 'Inspecting $array1' . PHP_EOL;

// echo 'Inspecting $array2' . PHP_EOL;
