<?php 

    class Fruit { //A class is a template for objects, and an object is an instance of class.

        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro () {
            echo "The fruit name is {$this->name} and its color is {$this->color}.";
        }
    }

?>