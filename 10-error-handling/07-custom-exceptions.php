<?php
// Custom Exceptions

// Run: php 10-error-handling/07-custom-exceptions.php

// Custom exception classes inherit from Exception for specific error handling

class InvalidEmailException extends Exception {}
class DatabaseException extends Exception {}

function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidEmailException("Invalid email format: " . $email);
    }
    return $email;
}

try {
    validateEmail("invalid-email");
} catch (InvalidEmailException $e) {
    echo "Email Error: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage() . "\n";
}
?>
