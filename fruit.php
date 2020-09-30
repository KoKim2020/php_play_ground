<?php 

    class Fruit { //A class is a template for objects, and an object is an instance of class.

        // properties
        public $name;
        public $color;
        
        // methods
        function set_name($name) {
            $this->name = $name;
        }

        public function get_name() {
            return $this->name;
        }

    }

?>