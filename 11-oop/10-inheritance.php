<?php
// Inheritance (extends)

// Run: php 11-oop/10-inheritance.php

// Inheritance allows a class to inherit properties and methods from a parent class

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " says: Woof!\n";
    }
}

$dog = new Dog("Buddy");
$dog->eat();
$dog->bark();
?>
