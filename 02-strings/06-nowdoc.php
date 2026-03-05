<?php
// Nowdoc

// Run: php 02-strings/06-nowdoc.php

// Nowdoc is like Heredoc but treats the string as single-quoted, so variables are NOT interpolated

$name = "Bob";
$price = 100;

$text = <<<'EOT'
The name $name and price $price are NOT interpolated.
This is a multi-line string using Nowdoc syntax.
Variables remain as literal text: $name, $price
EOT;

echo $text . "\n";
?>
