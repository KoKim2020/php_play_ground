<?php 
    include('fruit.php');
    $banana = new Fruit('banana', 'yellow');
    
    var_dump($banana->getName());
    echo "<br>";
    var_dump($banana->getColor());
?>