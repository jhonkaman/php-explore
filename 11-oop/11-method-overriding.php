<?php
// Method Overriding

// Run: php 11-oop/11-method-overriding.php

// Method overriding allows a child class to redefine a method from the parent class

class Shape {
    public function getArea() {
        return 0;
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

$rect = new Rectangle(5, 10);
echo "Rectangle area: " . $rect->getArea() . "\n";
?>
