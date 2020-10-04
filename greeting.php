<?php 
/**
 * - Static methods can be 
 * called directly - without creating an instance of a class.
 * 
 * - Static methods are declared with the static keyword:
 */
    class Greeting {
        public static function welcome () { // public is used to call from another class
            echo "testing 123";
        }

        public function __construct()
        {
            // call static method from another method within the same class
            self::welcome();
        }
    }
?>