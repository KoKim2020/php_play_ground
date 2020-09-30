<?php 

    class Fruit { //A class is a template for objects, and an object is an instance of class.

        // properties
        public $name;
        public $color;
        
        //A constructor allows you to initialize an object's properties upon creation of the object.
        
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function getName () {
            return $this->name;
        }

        public function getColor () {
            return $this->color;
        }

    }

?>