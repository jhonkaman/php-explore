<?php
// Default Parameters

// Run: php 09-functions/04-default-parameters.php

// Function parameters can have default values that are used when no argument is provided

function greetPerson($name = "Guest") {
    echo "Hello, " . $name . "!\n";
}

greetPerson();
greetPerson("Jack");

function createProfile($name, $age = 25, $city = "Unknown") {
    echo "Name: " . $name . "\n";
    echo "Age: " . $age . "\n";
    echo "City: " . $city . "\n";
}

createProfile("Karen");
createProfile("Leo", 30);
createProfile("Mia", 28, "Denver");
?>
