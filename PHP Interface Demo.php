<?php
interface Shape
{
    public function calculateArea();
}

interface Colorable
{
    public function getColor();
}

class Rectangle implements Shape, Colorable
{
    private $length;
    private $width;
    private $color;

    public function __construct($length, $width, $color)
    {
        $this->length = $length;
        $this->width = $width;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$rectangle = new Rectangle(5, 10, "Blue");
echo "Rectangle Area: " . $rectangle->calculateArea();
echo "Rectangle Color: " . $rectangle->getColor();

?>