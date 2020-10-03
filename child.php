<?php 
    include('human.php');
    class childClass extends ParentClass {
        public function prefixName ($name) {
            return "My name is $name.";
        }
    }

    // $mgmg = new childClass();
    // echo $mgmg->prefixName('Mg Mg');

?>