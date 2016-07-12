<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function nameSearch ($names){
	// foreach ($names as $key) {
	// 	if($key == 'Tina' || 'Dana' || 'Mike' || 'Amy' || 'Adam') {
			
	// 	}
	// }
// }

// $firstname = 'Tina'

// $result = array_search($firstname, $names)

// $youngRappers = ['Drizzy', 'YoungThug', 'FreddieGibbs', '']

// $find = 'Amy';

function lesDoIt ($find, $names) {
	if (array_search($find, $names) === false) {
		echo "FALSE\n";
	} else {
		echo "TRUE\n";
	}
}
lesDoIt('Bob', $names);


function compareArrays ($array1, $array2) {
	$count=0;
	foreach ($array1 as $key) {
		if (array_search($key, $array2) !== false) {
			$count++;
		}
	}
	echo "$count\n";
}

compareArrays($names, $compare);