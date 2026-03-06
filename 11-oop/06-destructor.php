<?php
// Destructor (__destruct)

// Run: php 11-oop/06-destructor.php

// The destructor is called automatically when an object is destroyed or script ends

class FileHandler {
    private $file;

    public function __construct($filename) {
        $this->file = $filename;
        echo "Opening file: " . $this->file . "\n";
    }

    public function __destruct() {
        echo "Closing file: " . $this->file . "\n";
    }
}

$handler = new FileHandler("data.txt");
echo "File is open\n";
// Destructor is called here when $handler goes out of scope
?>
