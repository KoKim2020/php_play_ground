<?php 
    include('car.php');

    $tesla = new Car();
    $tesla->setColor('yellow');
    echo $tesla->color;
?>