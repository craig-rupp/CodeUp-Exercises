<?php

//counter
//accumulator is total
// $total = 0;

// for ($i = 0; $i < 10; $i++){
// 	fwrite(STDOUT, "Enter a number:\n");
// 	$number = trim(fgets(STDIN));
// 	$total += $number
// }
// 	fwrite(STDOUT, "The sume of your numbers is $total\n");


fwrite(STDOUT, 'Enter starting number: ');
$start = (int) fgets(STDIN);
if(!is_numeric($start)){
	$start = 1;
}
fwrite(STDOUT, 'Enter ending number: ');
$end =  (int) fgets(STDIN);
if(!is_numeric($end)){
	$end = 50;
}
fwrite(STDOUT, 'Increment by: ');
$increment = (int) fgets(STDIN);
if(!is_numeric($increment)) {
	  $increment = 1;
}
for($i = $start; $i <= $end; $i += $increment) {
	  echo "{$i}\n";
}
 	

