<?php 
    /**
     * Constants cannot be changed once it is declared.
     *  recommended to name the constants in all uppercase letters
     * We can access a constant from outside the class by using the class name followed by the scope resolution operator (::)
     */

    class GoodBye {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

        public function byebye () {
            echo self::LEAVING_MESSAGE; // access constant inside the class
        }
    }

?>