<?php
// String Interpolation

// Run: php 02-strings/04-string-interpolation.php

// String interpolation allows embedding variables directly into double-quoted strings

$name = "John";
$age = 25;

echo "My name is $name\n";
echo "I am $age years old\n";

$person = ["name" => "Diana", "job" => "Engineer"];
echo "Name: {$person['name']}, Job: {$person['job']}\n";
?>
