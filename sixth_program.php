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
    $color = ['red', 'green', 'blue', 'black', 'white'];


    $keys = ['a', 'b', 'c', 'd', 'e', 'f'];

    $newArray = array_fill_keys($keys,'shah');
    $arrayFill = array_fill(0,6,'jan sha');

    echo '<pre>';
        print_r($newArray);
        print_r($arrayFill);
    echo "</pre>";







?>