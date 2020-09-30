<?php 

    class Fruit { //A class is a template for objects, and an object is an instance of class.

        // properties
        public $name;
        public $color;
        
        //when object create, automatically called construct method
        
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        
        // destruct automatically call at the end of the script

        public function __destruct()
        {
            echo "The fruit name is {$this->name} and Color is {$this->color}.";
        }

    }

?>