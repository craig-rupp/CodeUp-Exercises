<?php

$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
	echo gettype($thing), "\n";

}
foreach($things as $thing) {
  if(is_scalar($thing)){
    echo $thing, PHP_EOL;
  } else if(is_null($thing)){
  	echo $thing, PHP_EOL;
  } else if(is_array($thing)){
  	var_dump($thing);
  }
}






