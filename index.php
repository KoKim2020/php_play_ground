<?php 
    namespace Html;
    include('table.php');
    // table instance
    // $table = new Html\Table();
    $table = new Table();
    $table->title = 'My Table';
    
    // row instance
    // $row = new Html\Row();
    $row = new Row();
    $row->numCells = 5;


    echo $table->message();
    echo "<br>";
    echo $row->message();


?>