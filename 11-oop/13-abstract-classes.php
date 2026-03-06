<?php
// Abstract Classes (abstract)

// Run: php 11-oop/13-abstract-classes.php

// Abstract classes cannot be instantiated and may contain abstract methods that must be implemented by child classes

abstract class Instrument {
    abstract public function play();

    public function tune() {
        echo "Tuning instrument\n";
    }
}

class Piano extends Instrument {
    public function play() {
        echo "Playing piano: do re mi fa sol\n";
    }
}

$piano = new Piano();
$piano->tune();
$piano->play();
?>
