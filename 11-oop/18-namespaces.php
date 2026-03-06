<?php
// Namespaces

// Run: php 11-oop/18-namespaces.php

// Namespaces organize code and prevent naming conflicts by grouping related classes

namespace MyApp {

class Logger {
    public static function log($message) {
        echo "[MyApp\Logger] " . $message . "\n";
    }
}
}

namespace AnotherApp {
  class Logger {
      public static function log($message) {
          echo "[AnotherApp\Logger] " . $message . "\n";
      }
  }
}

namespace {
  MyApp\Logger::log("Application started");
  AnotherApp\Logger::log("Another app started");
}
?>
