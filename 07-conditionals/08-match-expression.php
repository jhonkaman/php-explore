<?php
// Match Expression

// Run: php 07-conditionals/08-match-expression.php

// The match expression returns a value based on pattern matching (PHP 8.0+)

$status = "active";

$message = match ($status) {
    "active" => "User is active",
    "inactive" => "User is inactive",
    "pending" => "User is pending",
    default => "Status unknown"
};

echo $message . "\n";

$day = 3;

$dayName = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday",
    default => "Invalid day"
};

echo "Day: " . $dayName . "\n";
?>
