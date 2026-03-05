<?php
// Increment and Decrement

// Run: php 06-operators/05-increment-and-decrement.php

// Increment (++) and decrement (--) operators increase or decrease a value by 1

$count = 5;

echo "Original: " . $count . "\n";
echo "Pre-increment (++\$count): " . (++$count) . "\n";
echo "After: " . $count . "\n";

$num = 10;
echo "\nOriginal: " . $num . "\n";
echo "Post-increment (\$num++): " . ($num++) . "\n";
echo "After: " . $num . "\n";

$value = 7;
echo "\nOriginal: " . $value . "\n";
echo "Pre-decrement (--\$value): " . (--$value) . "\n";
echo "After: " . $value . "\n";
?>
