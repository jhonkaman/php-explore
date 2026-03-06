<?php
// Try/Catch

// Run: php 10-error-handling/02-try-catch.php

// The try/catch block is used to handle exceptions and prevent script termination

try {
    $x = 5;
    $y = 0;

    if ($y == 0) {
        throw new Exception("Division by zero!");
    }

    $result = $x / $y;
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}

echo "Script continues after exception handling\n";
?>
