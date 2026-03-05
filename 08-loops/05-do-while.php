<?php
// Do...While

// Run: php 08-loops/05-do-while.php

// The do...while loop executes the code block once before checking the condition

$count = 1;

do {
    echo "Count: " . $count . "\n";
    $count++;
} while ($count <= 5);

echo "\n";

$num = 10;

do {
    echo "Number: " . $num . "\n";
    $num--;
} while ($num > 0);
?>
