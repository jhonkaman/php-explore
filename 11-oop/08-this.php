<?php
// $this

// Run: php 11-oop/08-this.php

// $this refers to the current object instance within a class

class Student {
    public $name;
    public $grade;

    public function __construct($name, $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getInfo() {
        return $this->name . " is in grade " . $this->grade;
    }

    public function setGrade($newGrade) {
        $this->grade = $newGrade;
    }
}

$student = new Student("Alice", 10);
echo $student->getInfo() . "\n";
$student->setGrade(11);
echo $student->getInfo() . "\n";
?>
