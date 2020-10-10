<?php 
    /**
     * iterables is the datatype of parameters of function
     * 
     */
    // use for array datatype
    function Test( iterable $a) { // access modifiers is not used
        foreach ($a as $key => $value) {
            echo $value;
        }
    }

    $k = Test([1,2,3]);
    print_r($k);
?>