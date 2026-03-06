<?php
// Static Properties and Methods

// Run: php 11-oop/09-static.php

// Static members belong to the class itself, not to individual objects

class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

Counter::increment();
Counter::increment();
Counter::increment();

echo "Count: " . Counter::getCount() . "\n";
?>
