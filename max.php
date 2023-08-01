<?php
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

$length = 5;
$width = 10;
$rectangleArea = calculateRectangleArea($length, $width);
echo "Rectangle Area (Procedural): " . $rectangleArea . "\n";


function calculateTriangleArea($base, $height) {
    return 0.5 * $base * $height;
}

$base = 8;
$height = 6;
$triangleArea = calculateTriangleArea($base, $height);
echo "Triangle Area (Functional): " . $triangleArea . "\n";

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

$radius = 7;
$circle = new Circle($radius);
$circleArea = $circle->calculateArea();
echo "Circle Area (Object-Oriented): " . $circleArea . "\n";
?>
