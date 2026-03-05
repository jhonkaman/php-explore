<?php
// Heredoc

// Run: php 02-strings/05-heredoc.php

// Heredoc is a way to define a string that can span multiple lines and supports variable interpolation

$name = "Alice";
$age = 30;

$text = <<<EOT
Hello, my name is $name.
I am $age years old.
This is a multi-line string using Heredoc syntax.
Variables are interpolated: $name is my name.
EOT;

echo $text . "\n";
?>
