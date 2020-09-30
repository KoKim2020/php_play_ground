<?php 
    include('fruit.php');
    $orange = new Fruit();
    $orange->set_name('orange');
    print_r($orange->get_name()); // shows type and value
    
?>