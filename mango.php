<?php 
    include 'fruit.php';

    class Mango extends Fruit {

        public function message() {
            echo "Am I a fruit or a berry?";
            $this->intro(); // acess protected property of food from its child class mango
        }
    }

?>