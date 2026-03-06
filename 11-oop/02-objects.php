<?php
// Objects

// Run: php 11-oop/02-objects.php

// An object is an instance of a class created with the new keyword

class Car {
    public $brand;
    public $model;
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->model = "Camry";

$car2 = new Car();
$car2->brand = "Honda";
$car2->model = "Civic";

echo "Car 1: " . $car1->brand . " " . $car1->model . "\n";
echo "Car 2: " . $car2->brand . " " . $car2->model . "\n";
?>
