<?php
// Removing Elements

// Run: php 06-associative-arrays/06-removing-elements.php

// Elements can be removed from arrays using the unset() function

$person = ["name" => "Grace", "age" => 28, "city" => "Seattle"];

unset($person["age"]);
echo "After removing age:\n";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>
