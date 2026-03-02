<?php
// Null Coalescing Operator

// Run: php 07-conditionals/06-null-coalescing-operator.php

// The null coalescing operator (??) returns the first operand if it exists and is not null, otherwise the second

$name = null;
echo "Name: " . ($name ?? "Unknown") . "\n";

$city = "New York";
echo "City: " . ($city ?? "Unknown") . "\n";

// Can be chained
$firstName = null;
$lastName = null;
$fullName = "Anonymous";
echo "Full name: " . ($firstName ?? $lastName ?? $fullName) . "\n";
?>
