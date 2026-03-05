<?php
// Alternative Syntax

// Run: php 08-loops/07-alternative-syntax.php

// For, foreach, and while loops support alternative syntax with colons and end keywords

$numbers = [1, 2, 3, 4, 5];

echo "For loop:\n";
for ($i = 0; $i < count($numbers); $i++):
    echo "Number: " . $numbers[$i] . "\n";
endfor;

echo "\nForeach loop:\n";
$person = ["name" => "Ivan", "age" => 40];
foreach ($person as $key => $value):
    echo $key . ": " . $value . "\n";
endforeach;

echo "\nWhile loop:\n";
$count = 1;
while ($count <= 3):
    echo "Count: " . $count . "\n";
    $count++;
endwhile;
?>
