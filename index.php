<?php 
    class Fruit {
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

    $orange = new Fruit();
    $orange->set_name('orange');

    print_r($orange->get_name()); // shows type and value
?>