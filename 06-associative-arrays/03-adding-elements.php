<?php
// Adding Elements

// Run: php 06-associative-arrays/04-adding-elements.php

// Elements can be added to arrays by assigning a value to a new index or using the [] syntax

$person = ["name" => "Eve"];
$person["age"] = 28;
$person["email"] = "eve@example.com";

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>
