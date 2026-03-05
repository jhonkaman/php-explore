<?php
// Nowdoc

// Run: php 02-strings/06-nowdoc.php

// Nowdoc is like Heredoc but treats the string as single-quoted, so variables are NOT interpolated

$name = "John";
$age = 30;

$text = <<<'EOT'
The name $name and age $age are NOT interpolated.
This is a multi-line string using Nowdoc syntax.
EOT;

echo $text . "\n";
?>
