<?php
// Updating Elements

// Run: php 06-associative-arrays/05-updating-elements.php

// Array elements can be updated by assigning a new value to an existing index or key

$person = ["name" => "Frank", "age" => 35];

$person["name"] = "Franklin";
$person["age"] = 36;

echo "Updated name: " . $person["name"] . "\n";
echo "Updated age: " . $person["age"] . "\n";
?>
