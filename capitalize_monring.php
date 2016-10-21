<?php
$uncaptialzed = ['arches', 'badland', 'carlsbad', 'denali'];
$to_capitalize = ['denali', 'badland'];

//var_dump(array_intersect_key($uncaptialzed, $to_capitalize));

function capitalize($array1, $array2){

	foreach($array1 as $array1_key => $array1_value){
		foreach($array2 as $array2_key => $array2_value){
			if($array1_key == $array2_value || $array1_value == $array2_value){
				$array2[$array2_key] = ucfirst($array2_value);
			}
			// $matchingKeys = array_intersect_key($array1, $array2);
			// $matchingKeys = implode("\n", $matchingKeys);
			//ucfirst($matchingKeys);
		}
	}
	return $array2[$array2_key] . PHP_EOL;
}

print_r(capitalize($uncaptialzed, $to_capitalize));