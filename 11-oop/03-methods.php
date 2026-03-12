<?php
// Methods

// Run: php 11-oop/01b-methods.php

// Methods are functions that belong to a class and define behavior for objects

class Dog {
    public $name;

    public function bark() {
        return $this->name . " says: Woof!\n";
    }

    public function eat() {
        return $this->name . " is eating.\n";
    }

    public function sleep() {
        return $this->name . " is sleeping.\n";
    }
}

$dog = new Dog();
$dog->name = "Buddy";
echo $dog->bark();
echo $dog->eat();
echo $dog->sleep();
?>
