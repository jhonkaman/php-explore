<?php
// String Interpolation

// Run: php 02-strings/04-string-interpolation.php

// String interpolation allows embedding variables directly into double-quoted strings

$name = "Charlie";
$age = 25;
$city = "Boston";

echo "My name is $name\n";
echo "I am $age years old\n";
echo "I live in $city\n";

$person = ["name" => "Diana", "job" => "Engineer"];
echo "Name: {$person['name']}, Job: {$person['job']}\n";
?>
