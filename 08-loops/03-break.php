<?php
// Break

// Run: php 08-loops/03-break.php

// The break statement exits a loop prematurely

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Breaking at " . $i . "\n";
        break;
    }
    echo "Number: " . $i . "\n";
}

echo "\nLoop ended\n";
?>
