<?php
// Parameters

// Run: php 09-functions/02-parameters.php

// Parameters are variables passed to a function when it is called

function add($a, $b) {
    echo "Adding " . $a . " and " . $b . "\n";
    echo "Result: " . ($a + $b) . "\n";
}

function greetPerson($name) {
    echo "Hello, " . $name . "!\n";
}

add(5, 3);
greetPerson("John");
?>
