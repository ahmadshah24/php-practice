<?php

    // $color = ['red', 'green', 'blue', 'black', 'white'];
    // $color = ['a'=>'red','b'=> 'green','c'=> 'blue','d'=> 'black','e'=> 'white'];
    // $names = ['ali','jan','khan'];
    // $arrSlice = array_slice($color, 1, 3);
    // $arrSlice = array_slice($color, 1, 3, true);
    // $arrSplice = array_splice($color,1,2,$names);
    // $arrayKeys = array_keys($color);
    // echo "<pre>";
    // print_r($arrSlice);
    // print_r($arrSplice);
    // print_r($color);
    // print_r($names);
    // print_r($arrayKeys);
    // echo "</pre>";


    // $num1 = [1,2,3,4,5,6,7,66,8,9];
    // $num2 = [1,2,3,4,44,66];
    // $firendsBoys = ['1'=>'ali', '2'=>'jan', '3'=>'khan', '4'=>'omar', '5'=>'asad'];
    // $firendsGrils = ['1'=>'lila', '2'=>'gul', '3'=>'shah', '4'=>'omar', '5'=>'asad'];
    // // $commanFriends = array_intersect_key($firendsBoys,$firendsGrils);
    // // $commanFriends = array_intersect_assoc($firendsBoys,$firendsGrils);
    // $commanFriends = array_intersect_assoc($firendsGrils,$firendsBoys);
    // $notCommonFriends = array_diff($firendsBoys,$firendsGrils);
    // $notCommonFriendss = array_diff($firendsGrils,$firendsBoys);
    // $arrayValues = array_values($firendsBoys);
    // $arrarIntersects = array_intersect($num1,$num2);

    // echo "<pre>";
    // // print_r($arrarIntersects);
    // // print_r($commanFriends);
    // // print_r($notCommonFriends);
    // // print_r($notCommonFriendss);
    // print_r($arrayValues);
    // echo "</pre>";



    // $emp = array(
    //     array(
    //         'id' =>1,
    //         'name' => 'John',
    //         'age' =>22
    //     ),
    //     array(
    //         'id' =>2,
    //         'name' => 'shah',
    //         'age' =>23
    //     ),
    //     array(
    //         'id' =>3,
    //         'name' => 'asad',
    //         'age' =>33
    //     ),
    // );


    // $names = array_column($emp, 'name');
    // $ages = array_column($emp, 'age');
    // $chunkArray = array_chunk($emp,2);
    // echo '<pre>';
    // print_r($names);
    // print_r($ages);
    // print_r($chunkArray);

    // echo '</pre>';



    // $names = array(
    //     'ali' => 22,
    //     'jan' => 33,
    //     'khan' => 34,
    // );


    // // $flipArray = array_flip($names);
    // $upperCaseNames = array_change_key_case($names, CASE_UPPER);
    // // $upperCaseNames = array_change_key_case($names, CASE_LOWER);
    // echo '<pre>';
    // // print_r($flipArray);
    // print_r($upperCaseNames);
    // echo '</pre>';
    
    // $Numbers = [1, 2, 3, 4, 5,6, 7, 8, 9, 10];
    // $sumNumbers = array_sum($Numbers);
    // $productNumber = array_product($Numbers);

    // echo '<pre>';
    // print_r($sumNumbers);
    // print_r($productNumber);
    // echo '</pre>';
        
    // $color = ['red', 'green', 'blue', 'black', 'white'];
    
    // $randColor = array_rand($color);
    // $arrayShuffle = shuffle($color);
    // print_r ($randColor);
    // print_r($arrayShuffle);
    
    
    // echo $color[$randColor];
    // $color = ['red', 'green', 'blue', 'black', 'white'];


    // $keys = ['a', 'b', 'c', 'd', 'e', 'f'];

    // $newArray = array_fill_keys($keys,'shah');
    // $arrayFill = array_fill(0,6,'jan sha');

    // echo '<pre>';
    //     print_r($newArray);
    //     print_r($arrayFill);
    // echo "</pre>";



    // function hello2(&$name)
    // {
    //     $name = 'jan shah gul';
    // }
    // $name = "John Doe";
    // hello2($name);
    // echo $name;
    // function call()
    // {
    //     echo "this is call function";
    // }

    // $callFunction = "call";


    // $callFunction();
    // function display($number)
    //     {
    //         if($number <= 3 )
    //         {
    //             echo $number."<br>";
    //             display($number + 1);
    //         }
    //     }
    // display(1);

    // function factorial($number)
    //     {
    //         if ($number == 0)
    //         {
    //             return 1;
    //         }
    //         else
    //         {
    //             return ($number * factorial($number - 1));
    //         }
    //     }

    // echo factorial(4);

    // function factorial($number)
    // {
    //     $result = 1;
    //     while ($number > 0) {
    //         $result *= $number;
    //         $number--;
    //     }
    //     return $result;
    // }
    
    // echo factorial(4);


//     $studentMarks = array('ahmad' => array('math'=>55,'computer'=>66),'jan'=>array('math'=>95,'computer'=>36));

// // echo $studentMarks['ahmad']['math'];

// // echo "<table border=1>";
// // echo "<th>"."Name"."</th>";
// // echo "<th>"."Math"."</th>";
// // echo "<th>"."computer"."</th>";
// foreach($studentMarks as $key => $value)
// {  
//     //  echo "<tr>";
    
//     // echo "</tr>";
//     // echo "<tr>";
//     // echo "<td>".$key."</td>";
//     echo $key."<br>";
//     foreach($value as $k => $v)
//     {
//         // echo "<td>".$v."</td>";
//         echo $k.$v."<br>";
//     }
//     echo "<br>";
//     // echo "</tr>";
// }
// // echo "</table>";


    // $marks = array('ali'=>array('math'=>33, 'computer'=>55), 'jan'=>array('math'=>44,'computer'=>66));


    // foreach($marks as $key => $value){
    //     echo $key."<br>";
    //     // print_r($value);
    //     foreach($value as $v)
    //     {
    //         echo $v."<br>";
    //     }
    // }

        // $arr = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');

        //     echo in_array('a', $arr);

        //     if (in_array('b', $arr)){
        //         echo 'find';
        //     }else{
        //         echo 'not found';
        //     }

    //      $f = ['apple','orange','grapes','malon'];
    // $v = ['onine','ptato','tomato'];
    // $c = ['red'];

    // $newArr = array_replace($f,$v,$c);

    
    // echo "<pre>";
    // print_r($newArr);
    // echo "<pre>";


    // $arr1 = ['a', 'b', 'c', 'd', 'e'];
    // $arr2 = [10,11,12,13,14,15,16,17,18,19,20];

    // $a = array('a' =>33, 'b' =>44,'c' =>55);
    // $b = array('k' =>33, 'l' =>66);

    // $newarr = array_merge($arr1,$arr2);
    // $arr = array_merge($a,$b,$arr1,$arr2);
    // $arrr = array_merge_recursive($a,$b);



    // echo "<pre>";
    // print_r($newarr);
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // echo "<pre>";
    // echo "</pre>";
    // print_r($arrr);
?>