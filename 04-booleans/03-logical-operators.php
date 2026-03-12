<?php
// Logical Operators

// Run: php 04-booleans/03-logical-operators.php

// Logical operators combine boolean values: AND (&&), OR (||), NOT (!)

$a = true;
$b = false;

echo "AND (&&): " . (($a && $b) ? "true" : "false") . "\n";
echo "OR (||): " . (($a || $b) ? "true" : "false") . "\n";
echo "NOT (!a): " . ((!$a) ? "true" : "false") . "\n";
echo "NOT (!b): " . ((!$b) ? "true" : "false") . "\n";
?>
