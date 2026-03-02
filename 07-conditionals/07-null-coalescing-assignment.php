<?php
// Null Coalescing Assignment

// Run: php 07-conditionals/07-null-coalescing-assignment.php

// The null coalescing assignment operator (??=) assigns a value only if the variable is null

$color = null;
$color ??= "Blue";
echo "Color: " . $color . "\n";

$size = "Large";
$size ??= "Medium";
echo "Size: " . $size . "\n";

$quantity = null;
$quantity ??= 10;
echo "Quantity: " . $quantity . "\n";
?>
