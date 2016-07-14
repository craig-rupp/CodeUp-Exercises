<?php


function removeVowels(&$vowels){
	foreach($vowels as $index => $vowel){
		if ($vowel == 'a' || $vowel == 'e' || $vowel == 'i' || $vowel == 'o' || 
			$vowel == 'o'){
			unset($vowels[$index]);
		}
	}
	return $vowels;
	
}

$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

removeVowels($letters);

print_r($letters);


// $vowels = ['a', 'e', 'i', 'o', 'u'];
// $noVowels = str_replace($vowels, '', implode(',', $letters));
// print_r(explode(',', $noVowels));
