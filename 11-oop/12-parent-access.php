<?php
// Parent Access (parent::)

// Run: php 11-oop/12-parent-access.php

// The parent:: keyword allows accessing parent class methods and properties

class Vehicle {
    public $type = "vehicle";

    public function describe() {
        return "This is a " . $this->type;
    }
}

class Bicycle extends Vehicle {
    public $type = "bicycle";

    public function describe() {
        return parent::describe() . " (more specifically a bicycle)";
    }
}

$bike = new Bicycle();
echo $bike->describe() . "\n";
?>
