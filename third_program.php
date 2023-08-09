<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// switch

    // $number =88;
    // switch ($number)
    // {
    //     case $number%2==0:
    //         echo "Number is even";
    //     break;
    //     case $number%2==1:
    //         echo "Number is odd";
    //     break;
    //     case $number==0:
    //         echo "Number is zero";
    //     default:
    //         echo "not a number";
    // }

    // ternay operator
    // $a = 9;
    // $b = 10;
    // $res = $a > $b ? $a : $b;
    // echo $res;

    // string operator

    // $name = 'shah';
    // $age = 44;

    // $info = $name.$age;
    // $dubleinfo = $info.$info;
    // echo $info;
    // echo $dubleinfo;

    // while loop

    // $num = 0 ;
    // while ($num < 10)
    // {
    //     echo $num."<br>";
    //     $num++;
    // }


    //do while loop
    // $num =0;
    // do
    // {
    //     echo "this is running once when the condition is wrong and more when the condition is true";
    //     $num++;
    // }while ($num > 6);


    // for loop

    // for($i = 1 ; $i <= 10 ;$i++)
    // {
    //     echo $i."<br/>";
    // }
    
    // $arr = [3,4,5];
    // foreach($arr as $a)
    // {
    //     echo $a."<br/>";
    // }

    // $arr = [array(1,2,3),array(4,5,6),array(7,8,9)];
    // foreach($arr as $a)
    // {
    //     foreach($a as $b)
    //     {
    //         echo $b." ";
    //     }
    //     echo "</br>";
    // }

    // for ($i = 10; $i > 0 ; $i--)
    // {
    //     echo $i."<br>";
    // }

    // for ($i = 0; $i < 5 ; $i++)
    // {
    //     echo $i."--";
    //     for ($j = 0; $j < 10; $j++)
    //     {
    //         echo $j." ";
    //     }
    //     echo "<br/>";
    // }

    // for($i = 0; $i < 10; $i++)
    // {
    //     if($i==5)
    //     {
    //         break;
    //     }
    //     echo $i."<br/>";
    // }
    

    // for($i = 0; $i < 10; $i++)
    // {
    //     if($i==5)
    //     {
    //         continue;
    //     }
    //     echo $i."<br/>";
    // }
    // for($i = 0; $i < 10; $i++)
    // {
    //     if($i==5)
    //     {
    //         goto abc;
    //     }
    //     echo $i."<br/>";
    // }
    // abc: echo "this shah";

    // function

    function showName($name="jan shah")
    {
        echo "this your name ".$name."<br/>";
    }
    showName('shah');
    showName('jan');
    showName('khan');
    showName('ali');
    showName();
    
    function showInfo($name = "jan shah",$age = 22)
    {
        echo "this your name ".$name." and your are ".$age." years old<br/>";
    }

    showInfo('jan gul',44);
    showInfo();
    showInfo($age = 99,$name = "jan shah")
    
?>
</body>
</html>