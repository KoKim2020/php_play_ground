<?php
    class Car {
        // final keyword to method prevents method overriding
        // add final to parent class name to  prevent class inheritance
        // properties
        public $name;
        public $company;

        public function __construct($name, $company)
        {
            $this->name = $name;
            $this->company = $company;
        }

        protected function intro () {
            echo "The Car name is {$this->name},  its company is {$this->company}";
        }
        
    }
?>