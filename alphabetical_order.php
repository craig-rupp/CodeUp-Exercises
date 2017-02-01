<?php


$letters = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function alphabetize($letters){
	for ($i=0; $i<count($letters); $i++) {
	    for ($j=0; $j<count($letters); $j++) {
	      // Compare two elements of array
	      if ($letters[$j] > $letters[$i]){
	        $tmp = $letters[$i]; //first position in array after all checks made  by nested loop on that position
	        $letters[$i] = $letters[$j]; //since g greater than e, it takes it's place on array where every item is tested against that element
	        $letters[$j] = $tmp; //g now first position on the array to check (in first case)
	        var_dump($letters);
	      }
	    }
	    var_dump($letters[$i]);
	 }
	//Print an array after sorting
	 // for($i=0;$i<count($letters);$i++){
	var_dump($letters) ."<br>\n";
	
}

alphabetize($letters);

// $unsorted = $letters;
// $sorted = [];
// foreach($letters as $i => $letter){
// 	$min = min($unsorted);
// 	$sorted[] = $min;
// 	$index = array_search($min, $unsorted);
// 	unset($unsorted[$index]);
// }

// print_r($sorted);