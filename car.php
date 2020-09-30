<?php
    class Car {
        // properties
        public $name;
        public $company;
        public $color;

        // methods
        public function setName ($name) { /// access everywhere
            $this->name = $name;
        }

        protected function setCompany ($company) { // access within class and its child
            $this->company = $company;
        }

        private function setColor ($color) { // access only within class
            $this->color = $color;
        }
        
    }
?>