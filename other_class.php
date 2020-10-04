<?php 
    include('greeting.php');
    
    class otherClass {
        public function message () {
            // call static method from other class
            Greeting::welcome();
        }
    }

    $other_class = new otherClass();
    $other_class->message();

?>