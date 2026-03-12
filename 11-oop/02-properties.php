<?php
// Properties

// Run: php 11-oop/03-properties.php

// Properties are variables that belong to a class and store data for each object

class Dog {
    public $name;
    public $age;
}

$dog = new Dog();
$dog->name = "Buddy";
$dog->age = 5;

echo "Name: " . $dog->name . "\n";
echo "Age: " . $dog->age . "\n";
?>
