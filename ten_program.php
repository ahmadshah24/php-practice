<?php

    // $string = "i love shah";

    // echo str_replace('shah','jan',$string); // case sensitive
    // echo str_ireplace('SHAH','jan',$string); // not case sensitive
    // echo substr_replace($string,'shah',2,3);

    // $name = 'shah';

    // echo strtr($name,'sh','ja');
    $string1 = 'shah ';
    $string2 = 'Shah';

    echo strcmp($string1,$string2); //case sensitive
    echo strcasecmp($string1,$string2); // not case sensitive
    echo strncmp($string1,$string2,2); // check the only first two characters
    echo strncasecmp($string1,$string2,2)."<br>"; // check the only first two characters not case sensitive

    echo substr_compare($string1,$string2,2,2, true)."<br>"; //
    echo similar_text($string1,$string2)."<br>";

    echo strrev($string1)."<br>";
    echo str_shuffle($string1)."<br>";

    echo str_pad($string1,3,'.');

    echo str_repeat($string1,3)."<br>";

    $word = "Hello";

    echo trim($word,'He')."<br>";
    echo ltrim($word,'He')."<br>";
    echo rtrim($word,'He')."<br>";
    echo chop($word,'He')."<br>";
    

    $sentance = "this is 'ahmadsha'";

    echo addslashes($sentance)."<br>"; //add the slashes to the sentence after or before quotes
    echo stripslashes($sentance)."<br>"; //remove the slashes to the sentence
    echo addcslashes($sentance,'s')."<br>"; //add the slashes to the sentence before the character
    echo stripcslashes($sentance)."<br>"; //add the slashes to the sentence before the character
    
    $url = "<a href='http://google.com/search>hello </a>";
    echo htmlentities($url, ENT_QUOTES)."<br>";
    echo htmlspecialchars($url, ENT_QUOTES)."<br>";

    echo html_entity_decode($url)."<br>";
    echo htmlspecialchars_decode($url)."<br>";

    echo "<pre>";
    print_r(get_html_translation_table());
    echo "</pre>";

?>
