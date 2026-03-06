<?php
// Methods

// Run: php 11-oop/04-methods.php

// Methods are functions that belong to a class and define behavior for objects

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();
echo "5 + 3 = " . $calc->add(5, 3) . "\n";
echo "5 - 3 = " . $calc->subtract(5, 3) . "\n";
echo "5 * 3 = " . $calc->multiply(5, 3) . "\n";
?>
