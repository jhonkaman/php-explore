<?php
// Indexed Arrays

// Run: php 05-arrays/01-indexed-arrays.php

// Indexed arrays store multiple values in a single variable, accessed by numeric index starting at 0

$fruits = array("Apple", "Banana", "Cherry");
$colors = ["Red", "Green", "Blue"];

echo "First fruit: " . $fruits[0] . "\n";
echo "Second color: " . $colors[1] . "\n";

$fruits[3] = "Date";
echo "Fourth fruit: " . $fruits[3] . "\n";
?>
