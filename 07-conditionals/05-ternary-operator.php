<?php
// Ternary Operator

// Run: php 07-conditionals/05-ternary-operator.php

// The ternary operator is a shorthand for if-else statements

$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Status: " . $status . "\n";

$score = 45;
$result = ($score >= 60) ? "Passed" : "Failed";
echo "Result: " . $result . "\n";
?>
