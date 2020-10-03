<?php 
    include('human.php');
    class childClass extends ParentClass {
         // The child class may define optional 
        //  arguments that are not in the parent's abstract method
        public function prefixName ($name, $separator = ".", $greet = "Dear") {
            if ($name == 'Mg Mg') {
                $prefix = 'U';
            } elseif ($name == 'Ma Ma') {
                $prefix = 'Daw';
            } else {
                $prefix = '';
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $mgmg = new childClass();
    echo $mgmg->prefixName('Mg Mg');

    echo "<br>";
    $mama = new childClass();
    echo $mama->prefixName("Ma Ma");

?>