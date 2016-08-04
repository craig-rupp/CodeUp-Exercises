<?php

require_once 'rectangle.php';

$rectangleCheck = new Rectangle(6, 8);


echo "Area for dis Rectangle: " . $rectangleCheck->area() . PHP_EOL;

$anotherRectangle = new Rectangle(20, 45);

echo "Super big rectangle: " . $anotherRectangle->area() . PHP_EOL;