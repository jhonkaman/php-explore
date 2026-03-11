<?php
// Elseif

// Run: php 07-conditionals/03-elseif.php

// The elseif statement checks multiple conditions in sequence

$score = 75;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}
?>
