<?php 


function removeVowels(&$vowels){
	foreach($vowels as $index => $vowel){
		if($vowel == 'a' || $vowel == 'e' || $vowel == 'i' || $vowel == 'o' || $vowel == 'u'){
			unset($vowels[$index]);
		}
	}
	return $vowels;
}


$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
removeVowels($letters);
var_dump($letters);


