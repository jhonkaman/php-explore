<?php
// Classes

// Run: php 11-oop/01-classes.php

// A class is a blueprint for creating objects with properties and methods

class Dog {
    public $name;
    public $color;

    public function bark() {
        echo $this->name . " says: Woof!\n";
    }
}

$dog = new Dog();
$dog->name = "Buddy";
$dog->color = "brown";
$dog->bark();
?>
