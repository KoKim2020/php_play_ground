<?php 
/**
 * Static properties can be called directly - 
 * without creating an instance of a class.
 */
class pi {
    public static $value = 3.14233311;
    // static property can be accessed from the method within the same class
    public function staticValue() {
        return self::$value; // use self keyword
    }
}
    // $pi = new pi();
    // echo $pi->staticValue();
?>