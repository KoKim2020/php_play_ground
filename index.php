<?php 
    include('parent_class.php');

    class Audi extends Car {
        public function intro () : string {
            return "Choose German quality! I'm an $this->name!";
        }
    }

    class Tesla extends Car {
        public function intro () : string { // : is used to show return data type
            return "my name is $this->name";
        }
    }

    $audi = new Audi('audi');
    echo $audi->intro();

    echo '<br>';

    $tesla = new Tesla('tesla');
    echo $tesla->intro();

?>