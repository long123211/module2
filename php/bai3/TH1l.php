<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	class Rectangle
	{
		public $width;
		public $height;

		public function __construct($width, $height)
		{
			$this->width = $width;
			$this->height = $height;
		}
		//tinh dien tich
		public function getArea()
		{
			return $this->width * $this->height;
		}

		//tinh chu vi
		public function getPerimeter()
		{
			return (($this->width + $this->height) * 2);
		}

		public function display()
		{
			return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
		}
	}
	$width  = 10;
	$height = 20;
	$rectangle = new Rectangle($width, $height);
	
	echo $rectangle->width; // 0utput: 10
	echo $rectangle->height; // 0utput: 20

	$rectangle->height = 30;
	$rectangle->width = 20;

	echo $rectangle->height; // 0utput: 30
	echo $rectangle->width; // 0utput: 20
	echo $rectangle->getPerimeter(); // 0utput: 100
	echo $rectangle->getArea(); // Output: 600
	echo ("Your Rectangle". $rectangle->display());
	?>
</body>
</html>