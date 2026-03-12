<?php
// Associative Arrays

// Run: php 06-associative-arrays/02-associative-arrays.php

// Associative arrays use key-value pairs instead of numeric indices

$person = array("name" => "John", "age" => 30, "city" => "New York");
echo $person["name"] . "\n";

$car = ["brand" => "Toyota", "model" => "Camry", "year" => 2022];
echo $car["brand"] . "\n";

$person["email"] = "john@example.com";
echo "Email: " . $person["email"] . "\n";
?>
