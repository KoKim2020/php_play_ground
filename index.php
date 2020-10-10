<?php 
    // namespace Html;
    use Html as H; //Give a namespace an alias:

    include('table.php');
    // table instance
    // $table = new Html\Table();
    $table = new H\Table();
    $table->title = 'My Table';
    
    // row instance
    // $row = new Html\Row();
    $row = new H\Row();
    $row->numCells = 5;


    echo $table->message();
    echo "<br>";
    echo $row->message();


?>