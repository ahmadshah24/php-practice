<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php

// echo "<pre>";
// print_r(getdate());
    // echo "</pre>";
    // echo "<pre>";
    // print_r(gettimeofday());
    // echo "</pre>";
    // echo gettimeofday(true);
    
    // echo "<pre>";
    // print_r(localtime(time()));
    // echo "</pre>";
    // echo "<pre>";
    // print_r(localtime(time(),true));
    // echo "</pre>";
    // echo "<pre>";
    // print_r(date_parse('2002-04-12'));
    // echo "</pre>";
    // echo "<pre>";
    // print_r(date_parse_from_format('Y-m-d H:i:s',"2023-04,12 12:22:33"));
    // echo "</pre>";
    // echo "<hr>";
    
    // echo strtotime('now')."<br/>"; 
    // echo date('y m d H:i:s',strtotime('now'))."<br/>";
    // echo date('y m d H:i:s',strtotime('+1 week'))."<br/>";
    // echo date('y m d H:i:s',strtotime('2000-02-22'))."<br/>";
    
    // // echo strftime("%B %d %Y, %X %Z");
    // echo "<hr>";
    // echo date_default_timezone_get();
    // date_default_timezone_set('America/New_York');
    // echo date_default_timezone_get();
    // $zone = timezone_open('Asia/kabul');
    // echo timezone_name_get($zone);
    // echo "<pre>";
    // echo print_r(timezone_location_get($zone)) ;
    // echo "</pre>";
    // echo "<pre>";
    // echo print_r(timezone_identifiers_list()) ;
    // echo "</pre>";
    
    // echo "<pre>";
    // echo print_r(timezone_identifiers_list(1)) ;
    // echo "</pre>";
    
    // include and include_once and require require_once
    // super variables and get post and request variables
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";

    // $server = $_SERVER;
    // echo $server['SERVER_NAME']."<br/>";
    // echo $server['SERVER_PORT']."<br/>";
    
    // $cookie_name = "cookie";
    // $cookie_value = 'ahmad shah';
    // setcookie($cookie_name, $cookie_value,time()+(86400),"/");

    // echo $_COOKIE[$cookie_name]."<br/>";
    
    // session_start();
    // echo "session is setted"."<br/>";    
    // $_SESSION["name"] = "AHmad shah";

    // echo $_SESSION["name"]."<br/>";
    
    // session_unset();
    // session_destroy();
    // echo "session is destroyed";
    echo "1. this is a message <br/>";
    echo "2. this is a message <br/>";
    echo "3. this is a message <br/>";
    die('this is a die message');
    echo "4. this is a message <br/>";
    echo "5. this is a message <br/>";
    echo "6. this is a message <br/>";
    echo "7. this is a message <br/>";


?>

    <!-- <form action="test.php" method="POST">
        
        <label for="txtname">
            name
            <input type="text" name="txtname">
        </label><br>
        <label for="age">
            age
            <input type="number" name="age">
        </label><br><br>
        <input type="submit">
    </form> -->

    </body>
    </html>