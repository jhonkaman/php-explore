<?php
// Objects

// Run: php 11-oop/02-objects.php

// An object is an instance of a class created with the new keyword

class Dog {
    public $name;
    public $color;

    public function bark() {
        echo $this->name . " says: Woof!\n";
    }
}

$dog1 = new Dog();
$dog1->name = "Buddy";
$dog1->color = "brown";

$dog2 = new Dog();
$dog2->name = "Max";
$dog2->color = "golden";

echo "Dog 1: " . $dog1->name . " (" . $dog1->color . ")\n";
$dog1->bark();
echo "Dog 2: " . $dog2->name . " (" . $dog2->color . ")\n";
$dog2->bark();
?>
