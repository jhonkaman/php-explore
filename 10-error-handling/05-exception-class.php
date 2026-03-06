<?php
// Exception Class

// Run: php 10-error-handling/05-exception-class.php

// The Exception class has useful methods to get information about the exception

try {
    throw new Exception("Something went wrong", 100);
} catch (Exception $e) {
    echo "Message: " . $e->getMessage() . "\n";
    echo "Code: " . $e->getCode() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "Trace: " . print_r($e->getTraceAsString(), true) . "\n";
}
?>
