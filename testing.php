<?php 
$arsenal_snakes = ['Nasri', 'Fabregas', 'RVP', 'Flamini'];
foreach ($arsenal_snakes as $player => $lastName) {
	if($lastName[0] === 'F'){
		echo $player . " " . $lastName[0] . $lastName[1] . $lastName[2] . PHP_EOL;
	} 
}

$uncaptialzed = ['arches', 'badland', 'carlsbad', 'denali'];
$to_capitalize = ['denali', 'badland'];

function capitalize($array1, $array2){
	foreach ($array1 as $arr1_k => $arr1_v) {
		foreach ($array2 as $arr2_k => $arr2_v) {
			//echo $arr1_k . PHP_EOL;
			if($arr1_v == $arr2_v){
				$array2[$arr2_k] = ucfirst($arr2_v);
			}
		}
	}
	return $array2[$arr2_k] . PHP_EOL;
}

print_r(capitalize($uncaptialzed, $to_capitalize));

function removeVowels($array){
	foreach ($array as $key => $value) {
		if(ctype_upper($value)){
			echo $array[$key] . PHP_EOL;
			strtolower($array[$key]);
			//print_r($array);
		}
	}
	// foreach ($variable as $key => $value) {
	// 	if($value == 'a' || $value == 'e' || $value == 'i' || $value == 'o' || $value == 'u'){
	// 		unset($array[$key]);
	// 	}
	// }
}

$letters = ['A', 'b', 'C', 'd', 'E', 'f', 'g', 'H', 'i'];
for ($i=0; $i < count($letters); $i++) { 
	if(ctype_upper($letters[$i])){
		echo $letters[$i];
		strtolower($letters[$i]);
	}
return $letters;
}
print_r($letters);

removeVowels($letters);


 ?>