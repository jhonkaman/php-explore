<?php
// Late Static Binding (static::)

// Run: php 11-oop/17-late-static-binding.php

// Late static binding uses static:: to resolve method calls at runtime instead of compile time

class BaseClass {
    public static function whoAmI() {
        echo "I am BaseClass\n";
    }

    public static function test() {
        static::whoAmI();
    }
}

class ChildClass extends BaseClass {
    public static function whoAmI() {
        echo "I am ChildClass\n";
    }
}

BaseClass::test();
ChildClass::test();
?>
