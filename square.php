<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	//public $height;
	//public $width;

	public function __construct($height)
	{
		parent::__construct($height, $height);
		// $this->height = $height;
		// $this->width = $width;
	}
	public function perimeter()
	{
		//$perimeter = ($this->height * 2) + ($this->width * 2);
		//return $perimeter;
		//return ($this->height * 2) + ($this->width * 2);

		return ($this->getHeight() * 2) + ($this->getWidth() * 2);

	}
	public function area()
	{
		//return $this->height * $this->width;

		return $this->getHeight() * $this->getWidth();
	}
}