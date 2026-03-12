<?php
// Accessing Elements

// Run: php 06-associative-arrays/03-accessing-elements-associative.php

// Array elements can be accessed by index or key, and can be looped through

$numbers = [10, 20, 30, 40, 50];

echo "Element at index 0: " . $numbers[0] . "\n";
echo "Element at index 2: " . $numbers[2] . "\n";

foreach ($numbers as $num) {
    echo "Number: " . $num . "\n";
}
?>
