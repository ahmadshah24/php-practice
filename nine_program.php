<?php

    $string = "this is shah and shah is a good man";

    // echo strpos($string,'shah');
    // echo strrpos($string,'shah');
    // echo stripos($string,'shah'); //not case sensitive
    // echo strripos($string,'shah'); //not case sensitive
    
    // echo strstr($string,'shah',TRUE)."<br>"; // if we give the ture it will return before the searched string
    // echo strchr($string,'shah')."<br>";
    // echo strrchr($string,'shah')."<br>";
    // echo stristr($string,'shah',TRUE)."<br>"; //not case sensitive
    // echo strpbrk($string,'s') //returns after the given letter

    echo substr($string,12,10);  // used for making a another string form a string

?>
