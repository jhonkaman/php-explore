<?php
// Traits (trait)

// Run: php 11-oop/15-traits.php

// Traits allow sharing methods across multiple classes without using inheritance

trait Logger {
    public function log($message) {
        echo "[LOG] " . $message . "\n";
    }
}

class User {
    use Logger;

    public $name;

    public function __construct($name) {
        $this->name = $name;
        $this->log("User created: " . $name);
    }
}

$user = new User("David");
$user->log("User logged in");
?>
