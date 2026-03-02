<?php
// Continue

// Run: php 08-loops/04-continue.php

// The continue statement skips the current iteration and moves to the next

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Skipping " . $i . "\n";
        continue;
    }
    echo "Number: " . $i . "\n";
}

echo "\nLoop completed\n";
?>
