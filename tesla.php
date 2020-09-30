<?php 
    include('car.php');
    class Tesla extends Car {
        public $weight;

        // Overriding Inherited Methods
        public function __construct($name, $company, $weight)
        {
            $this->name = $name;
            $this->company = $company;
            $this->weight = $weight;
        }
        // override intro protected method from its parent(car)
        public function intro () {
            echo "The Car name is {$this->name},  its company is {$this->company}, and its weight is {$this->weight}.";
        }
        
    }
?>

