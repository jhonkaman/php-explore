<?php
// Adding Elements

// Run: php 05-arrays/04-adding-elements.php

// Elements can be added to arrays by assigning a value to a new index or using the [] syntax

$fruits = ["Apple", "Banana"];

$fruits[2] = "Cherry";
print_r($fruits);

$fruits[] = "Date";
print_r($fruits);
echo "Added Date at index: " . (count($fruits) - 1) . "\n";

// Associative
$person = ["name" => "Eve"];
$person["age"] = 28;
$person["email"] = "eve@example.com";

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>
