<?php
// Return Values

// Run: php 09-functions/03-return-values.php

// A function can return a value that can be used in the calling code

function multiply($a, $b) {
    return $a * $b;
}

function getFullName($firstName, $lastName) {
    return $firstName . " " . $lastName;
}

$result = multiply(4, 5);
echo "4 * 5 = " . $result . "\n";

$name = getFullName("John", "Doe");
echo "Full name: " . $name . "\n";
?>
