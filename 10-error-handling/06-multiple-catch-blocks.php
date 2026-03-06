<?php
// Multiple Catch Blocks

// Run: php 10-error-handling/06-multiple-catch-blocks.php

// Multiple catch blocks allow handling different exception types differently

class CustomException extends Exception {}
class ValidationException extends Exception {}

try {
    $type = 2;

    if ($type === 1) {
        throw new ValidationException("Validation failed");
    } elseif ($type === 2) {
        throw new CustomException("Custom error occurred");
    } else {
        throw new Exception("Generic error");
    }
} catch (ValidationException $e) {
    echo "Validation Error: " . $e->getMessage() . "\n";
} catch (CustomException $e) {
    echo "Custom Error: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage() . "\n";
}
?>
