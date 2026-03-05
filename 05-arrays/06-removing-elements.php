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

$person = ["name" => "Grace", "age" => 28, "city" => "Seattle"];

unset($person["age"]);
echo "After removing age:\n";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>
