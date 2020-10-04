<?php 
    include('message1.php');
    include('message2.php');

    // class Welcome {
    //     use message1; // use traits in class
    // }

    // $welcome = new Welcome();
    // $welcome->msg1();
    class Welcome2 {
        use message1, message2;
    }
    $welcome2 = new Welcome2();
    $welcome2->msg1();
    echo "<br>";
    $welcome2->msg2();
?>