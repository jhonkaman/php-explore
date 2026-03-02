<?php
// Switch

// Run: php 07-conditionals/09-switch.php

// The switch statement selects code to execute based on different cases

$fruit = "apple";

switch ($fruit) {
    case "apple":
        echo "Apple is red\n";
        break;
    case "banana":
        echo "Banana is yellow\n";
        break;
    case "orange":
        echo "Orange is orange\n";
        break;
    default:
        echo "Unknown fruit\n";
}

echo "\n";

$day = 3;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Weekday\n";
        break;
    case 6:
    case 7:
        echo "Weekend\n";
        break;
}
?>
