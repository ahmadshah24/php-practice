<?php

//   $numbers = [1, 2, 3, 4, 5, 6];
  
//   list($a, $b) = $numbers;

//   echo $a."<br>";
//   echo $b;



//extract will extract the array 
// $colors = ['a'=>'red', 'b'=>'green', 'c'=>'yellow'];
// it will make a variable for each key of the above array
// extract($colors);

// echo $a;

// compact it make an accsosative array out of our variables

// $name = 'ali';
// $age = 33;
// $gender = "Male";
// $country = 'Afghanistan';
// // we add an array as it's key also
// $anotherarray = ["gender","country"];
// $newarray = compact('name', 'age', $anotherarray);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";



// array range will give us an array between the start and end of the range

// $arr = range(1,10,1);
// $alpha = range('a','x');
// echo "<pre>";
// print_r($arr);
// print_r($alpha);
// echo "</pre>";

// we can also use the range() function inside the foreach

// foreach(range(1,10) as $num)
// {
//     echo $num."<br>";
// }

// explode and implode are used to convert array to string and string to array

// $sentacne = 'this is ahmad';
// $arr = explode(' ', $sentacne); // form string to array

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// $sent = implode(' ', $arr);
// echo $sent;


// str_split and chunk_split

// $word = 'ahmadshah';
// $newword = str_split($word);
// echo "<pre>";
// print_r($newword);
// echo "</pre>";
// $name = 'shah';
// $chunkword = chunk_split($name,1,'..');
// echo $chunkword;


// lowercase and ypper case in php


$word = 'sayed ahmad shah shah';
echo strtoupper($word).'<br>';
echo strtolower($word).'<br>';
echo ucfirst($word).'<br>';
echo ucwords($word).'<br>';
echo lcfirst($word).'<br>';

echo strlen($word).'<br>';
echo str_word_count($word).'<br>';
echo substr_count($word,'shah');
?>