<?php 
    include('mango.php');
    include('tesla.php');
    /**
     * Mango
     */
    // $mango = new Mango('mango', 'green');
    // $mango->message();

    /**
     * Tesla
     */

    $tesla = new Tesla('b1','tesla_motors', '100kg');
    $tesla->intro();

?>