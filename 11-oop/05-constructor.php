<?php
// Constructor

// Run: php 11-oop/05-constructor.php

// The constructor is a special method called automatically when an object is created

class Dog {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
        echo "Dog created: " . $this->name . "\n";
    }
}

$dog = new Dog("Buddy", "brown");
echo "Color: " . $dog->color . "\n";
?>
