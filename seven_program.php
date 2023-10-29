<?php

    // array map

    $arr = array(1,2,3,4,5,6,7,8,9,10,11);

    function squer($n)
    {
        return $n * $n;
    }
    $newarr= array_map('squer',$arr);
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";


?>