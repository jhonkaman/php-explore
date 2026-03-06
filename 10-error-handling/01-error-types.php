<?php
// Error Types

// Run: php 10-error-handling/01-error-types.php

// PHP has different error types: Notice, Warning, Fatal Error, Parse Error, etc.

// Undefined variable notice
// echo $undefined_variable; // This would cause a notice

// Division by zero warning
$result = 10 / 0; // This generates a warning

// Array index notice
$array = ["a" => 1];
// echo $array["b"]; // This would cause a notice

echo "Common error types: Notice, Warning, Parse Error, Fatal Error\n";
?>
