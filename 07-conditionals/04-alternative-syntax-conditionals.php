<?php
// Alternative Syntax

// Run: php 07-conditionals/04-alternative-syntax.php

// Alternative syntax for if uses colons and endif instead of braces

$age = 20;

if ($age >= 18):
    echo "You are an adult\n";
endif;

$score = 75;

if ($score >= 90):
    echo "Grade: A\n";
elseif ($score >= 80):
    echo "Grade: B\n";
else:
    echo "Grade: C or lower\n";
endif;
?>
