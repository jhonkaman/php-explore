<?php
// Elseif

// Run: php 07-conditionals/03-elseif.php

// The elseif statement checks multiple conditions in sequence

$grade = 75;

if ($grade >= 90) {
    echo "Grade: A\n";
} elseif ($grade >= 80) {
    echo "Grade: B\n";
} elseif ($grade >= 70) {
    echo "Grade: C\n";
} elseif ($grade >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}
?>
