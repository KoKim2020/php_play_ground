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

    $apple = new Fruit();
    $apple->set_name('apple');

    print_r($apple->get_name()); // shows type and value
?>