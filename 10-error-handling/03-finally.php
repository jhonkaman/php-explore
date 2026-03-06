<?php
// Finally

// Run: php 10-error-handling/03-finally.php

// The finally block executes after try/catch regardless of whether an exception was thrown

try {
    echo "In try block\n";
    throw new Exception("Something went wrong");
} catch (Exception $e) {
    echo "Caught: " . $e->getMessage() . "\n";
} finally {
    echo "Finally block always executes\n";
}

echo "\nAnother example:\n";

try {
    echo "Opening resource\n";
} finally {
    echo "Closing resource (cleanup code)\n";
}
?>
