<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangleCheck = new Rectangle(6, 8);


//echo "Area for dis Rectangle: " . $rectangleCheck->area() . PHP_EOL;

$anotherRectangle = new Rectangle(20, 45);

//echo "Super big rectangle: " . $anotherRectangle->area() . PHP_EOL;


$disSquare = new Square(12, 13);

//echo "Dis square's area is: " . $disSquare->area() . PHP_EOL;

echo "Dis square's perimeter is: " . $disSquare->perimeter() . PHP_EOL;

$newSquare = new Square(15);

echo "Dis square has an area of: " . $newSquare->area().PHP_EOL;

