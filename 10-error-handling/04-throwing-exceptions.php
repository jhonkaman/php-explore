<?php
// Throwing Exceptions (throw)

// Run: php 10-error-handling/04-throwing-exceptions.php

// The throw statement is used to throw an exception manually

function validateAge($age) {
    if ($age < 0) {
        throw new Exception("Age cannot be negative");
    }
    if ($age > 150) {
        throw new Exception("Age is unrealistic");
    }
    return $age;
}

try {
    validateAge(25);
    echo "Age is valid\n";

    validateAge(-5);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
