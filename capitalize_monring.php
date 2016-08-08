<?php



function capitalize(){
$uncaptialzed = ['arches', 'badland', 'carlsbad', 'denali'];
$to_capitalize = ['denali', 'badlands'];

	foreach($uncaptialzed as $key => $word){
		foreach($to_capitalize as $cap){
			if($word == $cap){
				$uncaptialzed[$key] = ucfirst($word);
			}
		}
	}
	return $word;
}

print_r(capitalize());