<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // $a = "ali";
    // var_dump($a,"<br>");
    // $a =33;
    // var_dump($a,"<br>");
    // $a = 44.4;
    // var_dump($a,"<br>");
    // $a = true;
    // var_dump($a,"<br>");
    // $a = false;
    // var_dump($a,"<br>");
    // $a = array(3,4,4,2);
    // var_dump($a,"<br>");
    // $a = null;
    //  var_dump($a,"<br>");

    // define('pi',3.14);
    // echo pi;

    $a = 99;
    $b = 66;
    
    echo $a+$b."<br>";
    echo $a-$b."<br>";
    echo $a*$b."<br>";
    echo $a/$b."<br>";
    echo $a%$b."<br>";
    echo $a**$b."<br>";
    echo ++$a."<br>";
    echo --$b."<br>";
    
    $a +=$a;
    echo $a."<br>"; 
    
    echo $a<$b."<br>";
    echo $a>$b."<br>";
    echo $a==$b."<br>";
    echo $a!=$b."<br>";


    $name = 'shahk';

    if($name == 'shah')
    {
        echo "<br> hello {$name}";
    }
    else
    {
        echo "<br> your are not allowed <br>";
    }



    $x = 99;
    $y = 9;
    $z = 996;
    $res  = null;
    if($x>$y && $x>$z)
    {
        $res = $x;
    }
    else if($y>$x && $y>$z)
    {
        $res = $y;
    }
    else
    {
        $res = $z;
    }
    echo $res;
    

    
    ?>
</body>
</html>