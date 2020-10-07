<?php 
    include('pi.php');
    class x extends pi {
        public function xStatic () {
            return parent::$value; //call parent static method
        }
    }
    $x = new x();
    echo $x->xStatic();
?>