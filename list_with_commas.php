<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

// print_r($physicistsArray);

// $and = "and";
sort($physicistsArray);
// print_r($physicistsArray);

array_splice($physicistsArray, 5, 0, 'and');
// print_r($physicistsArray);



print_r($physicistsArray);

$famousFakePhysicists = ' ';

function humanizedList($famousFakePhysicists){

	global $physicistsArray;

	$famousFakePhysicists = implode(', ', $physicistsArray);

	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

}

humanizedList($famousFakePhysicists);

