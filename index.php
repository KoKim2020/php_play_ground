<?php 
    include('goodbye.php');
    // echo GoodBye::LEAVING_MESSAGE; // access constant outside the class
    $goodbye = new GoodBye();
    $goodbye->byebye();
?>