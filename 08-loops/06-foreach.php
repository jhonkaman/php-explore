<?php
// Foreach

// Run: php 08-loops/06-foreach.php

// The foreach loop iterates over arrays, executing code for each element

$fruits = ["Apple", "Banana", "Cherry"];

echo "Indexed array:\n";
foreach ($fruits as $fruit) {
    echo "Fruit: " . $fruit . "\n";
}

echo "\nAssociative array:\n";

$person = ["name" => "Helen", "age" => 32, "city" => "Portland"];

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>
