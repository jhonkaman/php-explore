<?php
// Constructor (__construct)

// Run: php 11-oop/05-constructor.php

// The constructor is a special method called automatically when an object is created

class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        echo "Book created: " . $this->title . "\n";
    }
}

$book = new Book("The Great Gatsby", "F. Scott Fitzgerald");
echo "Author: " . $book->author . "\n";
?>
