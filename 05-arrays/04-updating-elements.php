<?php
// Updating Elements

// Run: php 05-arrays/05-updating-elements.php

// Array elements can be updated by assigning a new value to an existing index or key

$numbers = [10, 20, 30, 40];

$numbers[0] = 15;
echo "Updated first element: " . $numbers[0] . "\n";

$numbers[2] = 35;
echo "Updated third element: " . $numbers[2] . "\n";

?>
