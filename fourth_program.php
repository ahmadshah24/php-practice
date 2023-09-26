<?php

// function add($a,$b)
// {
//     return $a + $b;
// }
// echo add(44,44);


// function hello($name)
// {
//     $name = 'shah';
// }   

// $name1 = 'ali jan';
// hello($name1);
// echo $name1;

// echo "------------------------------";

// // $name1 = 'kkhan jan';

// function hello2(&$name)
// {
//     $name = 'jan shah gul';
// }   

// $name2 = 'ali jan';

// hello($name2);
// echo $name2     ;

// function call()
// {
//     echo "this is call function";
// }

// $callFunction = "call";


// $callFunction();

// $add = function ($a,$b)
// {
//     echo "<br> the resutlt is ".$a+$b;
// };

// $add(4,33);

// function display($number)
// {
//     if($number <= 5 )
//     {
//         echo $number."<br>";
//         display($number + 1);
//     }
// }
// display(1);

// function factorial($number)
// {
//     if ($number == 0)
//     {
//         return 1;
//     }
//     else
//     {
//         return ($number * factorial($number - 1));
//     }
// }

// echo factorial(8);


// $number = 99;

// function showNumber()
// {
//     global $number ;
//     $number = 88;
//     echo "number inside the function ".$number."<br>";
// }

// showNumber();
// echo $number;


// array

// $number = 23,4,5,6;
// $number = [1,2,4,5];
// $number = array(1,2,4,5,'a');

// echo $number[4];
// $number[2] = 8;
// echo $number[2];
// echo "<pre>";
// print_r($number);
// echo "</pre>";

// for($i=0;$i <=sizeof($number); $i++)
// {
//     echo $i."<br>";
// }
// echo "<ul>";
// for($i=0;$i <=sizeof($number); $i++)
// {
//     echo "<li>".$i."</li>";
// }
// echo "</ul>";

// echo "<ul>";
// foreach($number as $num)
// {
//     echo "<li>".$num."</li>";
// }
// echo "</ul>";


// $studentAges = array('ali'=>44,'jan'=>33,'khan'=>22);

// echo $studentAges['ali'];
// echo "<ul>";
// // for($i=0;$i <=sizeof($studentAges); $i++)
// // {
// //     echo "<li>".$i."</li>";
// // }
// echo "</ul>";
// foreach($studentAges as $key => $value)
// {
//     echo $key." is ".$value." years old"."<br>";
// }



// $metrix = [array(1,2,3),array(4,5,6),array(7,8,9)];

// // echo $metrix[0][1];
// echo "<pre>";
// print_r($metrix);
// echo "</pre>";

// for($i = 0;$i<sizeof($metrix) ; $i++)
// {
//     for($j=0;$j <3;$j++)
//     {
//         echo $metrix[$i][$j];
//     }
//     echo "<br>";
// }

// foreach($metrix as $m)
// {
//     foreach($m as $mm)
//     {
//         echo $mm;
//     }
//     echo "<br>";
// }


$studentMarks = array('ahmad' => array('math'=>55,'computer'=>66),'jan'=>array('math'=>95,'computer'=>36));

// echo $studentMarks['ahmad']['math'];

echo "<table border=1>";
echo "<th>"."Name"."</th>";
echo "<th>"."Math"."</th>";
echo "<th>"."computer"."</th>";
foreach($studentMarks as $key => $value)
{   echo "<tr>";
    
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$key."</td>";
    foreach($value as $v)
    {
        echo "<td>".$v."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>