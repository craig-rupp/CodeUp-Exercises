<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$autoSort = false;

function humanizedList($physicistsArray, $autoSort = false){
	if($autoSort){
		sort($physicistsArray);	
	}
	array_pop($physicistsArray);
	array_splice($physicistsArray, 5, 0, 'and Tony Stark');

	$famousFakePhysicists = implode(', ', $physicistsArray);
	
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

}
$physicistsArray = explode(', ', $physicistsString);

humanizedList($physicistsArray, true);



