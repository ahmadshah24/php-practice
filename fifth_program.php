<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    // $arr = [
    //     [1,2,3],
    //     [4,5,6],
    // ];
    // foreach($arr as list($a,$b,$c))
    // {
    //     echo $a." ".$b." ".$c."<br>";
    // }

    // $emp = [
    //     [1,'ali','cook'],
    //     [2,'khan','driver'],
    //     [3,'jan','manager'],
    //     [4,'jul','programmer'],
    // ];
    // echo "<table border=1 cellpadding=5 cellspacing=0>";
    // foreach($emp as list($id,$name,$pos))
    // {
    //     echo "<tr>"."<td>".$id."</td>"."<td>".$name."</td>"."<td>".$pos."</td>"."</tr>";
    // }

    // echo "</table>";

    // $empp = [
    //     [
    //         'id' => 1,
    //         'name' => 'khan',
    //         'age' => 33
    //     ],
    //     [
    //         'id' => 1,
    //         'name' => 'khan',
    //         'age' => 33
    //     ],
    //     [
    //         'id' => 1,
    //         'name' => 'khan',
    //         'age' => 33
    //     ],
    //     [
    //         'id' => 1,
    //         'name' => 'khan',
    //         'age' => 33
    //     ],
        
    // ];

    // echo "<table border=1 cellspacing=0 cellpadding=5>";
    // echo "<tr>"."<th>"."id"."</th>"."<th>"."name"."</th>"."<th>"."age"."</th>";
    // foreach ($empp as list('id' =>$id, 'name' => $name, 'age' => $age))
    // {
    //     echo "<tr>"."<td>".$id."</td>"."<td>".$name."</td>"."<td>".$age."</td>"."</tr>";
    // }

    // echo "</table>";

    // echo "<hr/>";
    
    // echo count($emp);
    // echo "<hr/>";
    // echo count($empp,1);    
    // echo "<hr/>";
    // echo sizeof($empp,1);
    // echo "<hr/>";
    // echo sizeof($empp);
    // echo "<hr/>";

    // echo "<pre>";
    // // print_r(array_count_values($empp));
    // echo "</pre>";



    // $arr = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');

    // echo in_array('a', $arr);

    // if (in_array('b', $arr)){
    //     echo 'find';
    // }else{
    //     echo 'not found';
    // }

    // echo array_search('f', $arr);

    // $a = array(array('a' =>1, 'b' =>2, 'c' =>3, 'd' =>4));

    // $b = array(array('a','b'),array('c','d'));
    // // echo in_array(array('a' =>1) , $a, true);

    // if (in_array((array('a','b'),$b,)))
    // {
    //     echo  'yes';
    // }
    // else{
    //     echo 'no';
    // }

    // $f = ['apple','orange','grapes','malon'];
    // $v = ['onine','ptato','tomato'];
    // $c = ['red'];

    // $newArr = array_replace($f,$v,$c);

    
    // echo "<pre>";
    // print_r($newArr);
    // echo "<pre>";
    // $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
    // // array_pop($arr);
    // // array_push($arr,44);

    // array_shift($arr);
    // array_unshift($arr,55);
    // echo "<pre>";
    // print_r($arr);
    // echo "<pre>";



    $arr1 = ['a', 'b', 'c', 'd', 'e'];
    $arr2 = [10,11,12,13,14,15,16,17,18,19,20];

    $a = array('a' =>33, 'b' =>44,'c' =>55);
    $b = array('k' =>33, 'l' =>66);

    $newarr = array_merge($arr1,$arr2);
    $arr = array_merge($a,$b,$arr1,$arr2);
    $arrr = array_merge_recursive($a,$b);



    echo "<pre>";
    print_r($newarr);
    echo "</pre>";
    
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
    echo "<pre>";
    echo "</pre>";
    print_r($arrr);














?>
</body>
</html>