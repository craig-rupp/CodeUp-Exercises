<?php 

$first_set = "1, 2, 5, 7, 3, 4, 9";
$second_set = [3, 11, 14, 8, 6];
// $first_set = explode(", ", $first_set);
// echo gettype($first_set);

function arrayFilter($first_array, $second_array){
	$combined_array = [];
	$filtered_array = [];
	!is_array($first_array) ? $first_array = explode(", ", $first_array) : print_r($first_array);
	!is_array($second_array) ? explode($second_array) : print_r($second_array);
	echo gettype($first_array) . PHP_EOL;
	print_r($first_array);
	$combined_array = array_merge($first_array, $second_array);
	print_r($combined_array);
	for($i = 0; $i < count($combined_array); $i++){
		for($j = 0; $j < count($combined_array); $j++){
			if($combined_array[$j] > $combined_array[$i]){
				$temp = $combined_array[$i];
				$combined_array[$i] = $combined_array[$j];
				$combined_array[$j] = $temp;
			}
		}
	}
	echo "Peep your now sorted combined array " . PHP_EOL;
	print_r($combined_array) . PHP_EOL;
}
arrayFilter($first_set, $second_set);


function showMessage($hello=false){
  echo ($hello)?'hello':'bye';
}
showMessage(true);

 ?>