<?php 
    // namespace Html;
    // use Html as H; //Give a namespace an alias:
    use Html\Table as T;
    use Html\Row as R; //Give a class an alias:

    include('table.php');
    // table instance
    // $table = new Html\Table();
    $table = new T();
    $table->title = 'My Table';
    
    // row instance
    // $row = new Html\Row();
    $row = new R();
    $row->numCells = 5;


    echo $table->message();
    echo "<br>";
    echo $row->message();


?>