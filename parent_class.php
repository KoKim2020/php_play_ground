<?php 
/**
 * abstract methods & class => parent class has named methods 
 * and children must do these methods
 *  
 * 1 abstract class => at least one abstract method
 * 
 * An abstract class or method is defined with the abstract keyword
 */
    abstract class Car {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        // abstract method
        abstract public function intro() : string;
    }
?>