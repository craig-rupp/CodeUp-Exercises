<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$autoSort = false;

function humanizedList($physicistsArray, $autoSort = false){
	if($autoSort){
		sort($physicistsArray);	
	}
	$lastItem = array_pop($physicistsArray); 
	$text = implode(', ', $physicistsArray);
	$text .= ' and '. $lastItem; 
	echo "Some of the most famous fictional physicists are {$text}". PHP_EOL;
	
}
$physicistsArray = explode(', ', $physicistsString);
// // end($physicistsArray);
// $secondToLast = $physicistsArray[count($physicistsArray)-2];
// array_splice($physicistsArray, $secondToLast, 'and');
// echo($physicistsArray);

humanizedList($physicistsArray, true);
