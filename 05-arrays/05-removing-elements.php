<?php
// Removing Elements

// Run: php 05-arrays/06-removing-elements.php

// Elements can be removed from arrays using the unset() function

$fruits = ["Apple", "Banana", "Cherry", "Date"];

unset($fruits[1]);
echo "After removing Banana:\n";
foreach ($fruits as $key => $fruit) {
    echo $key . ": " . $fruit . "\n";
}

echo "\n";

?>
