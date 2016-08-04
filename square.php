<?php

require_once 'rectangle.php';

class Square extends Rectangle
{
	public function perimeter($height)
	{
		return $this->height * 4;
	}
}