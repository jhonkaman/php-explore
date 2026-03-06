<?php
// Constants (const)

// Run: php 11-oop/16-constants.php

// Class constants are fixed values that cannot be changed and are accessed using ::

class Math {
    const PI = 3.14159;
    const E = 2.71828;

    public static function circleArea($radius) {
        return self::PI * $radius * $radius;
    }
}

echo "PI = " . Math::PI . "\n";
echo "E = " . Math::E . "\n";
echo "Area of circle with radius 5 = " . Math::circleArea(5) . "\n";
?>
