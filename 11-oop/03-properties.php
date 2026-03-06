<?php
// Properties

// Run: php 11-oop/03-properties.php

// Properties are variables that belong to a class and store data for each object

class Person {
    public $firstName;
    public $lastName;
    public $age;
}

$person = new Person();
$person->firstName = "John";
$person->lastName = "Doe";
$person->age = 30;

echo "Name: " . $person->firstName . " " . $person->lastName . "\n";
echo "Age: " . $person->age . "\n";
?>
