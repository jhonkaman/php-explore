<?php
// Boolean Variables

// Run: php 04-booleans/01-boolean-variables.php

// Boolean variables can only be true or false

$isActive = true;
$isAdmin = false;

if ($isActive) {
    echo "User is active\n";
}

if (!$isAdmin) {
    echo "User is not an admin\n";
}

echo "isActive: " . ($isActive ? "true" : "false") . "\n";
echo "isAdmin: " . ($isAdmin ? "true" : "false") . "\n";
?>
