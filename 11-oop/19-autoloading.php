<?php
// Autoloading (spl_autoload_register)

// Run: php 11-oop/19-autoloading.php

// Autoloading automatically loads class files when they are used, instead of requiring manual includes

spl_autoload_register(function ($class) {
    echo "Attempting to load class: " . $class . "\n";
    $file = __DIR__ . "/" . $class . ".php";

    if (file_exists($file)) {
        require $file;
    } else {
        echo "Class file not found: " . $file . "\n";
    }
});

echo "Autoloading is configured\n";
echo "When a class is used, PHP will automatically try to load its file\n";
?>
