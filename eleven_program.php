<?php

    // $password = 'shah jan shah ';

    // echo md5($password)."<br/>"; //hex
    // echo md5($password,true)."<br/>"; //binary
    
    // echo sha1($password)."<br/>";
    // echo sha1($password,true)."<br/>";
    
    // $encode =  convert_uuencode($password)."<br/>";
    // echo $encode."<br/>";
    // echo convert_uudecode($encode)."<br/>";

    // echo "<hr/>";
    // $name = "ahmad shah";
    // $bin = bin2hex($name);
    // echo $bin."<br/>";
    // echo hex2bin($bin)."<br/>";
    // echo "<hr/>";
    // echo chr(65)."<br/>";
    // echo ord('B')."<br/>";
    // echo "<hr/>";
    // $sentence =  "Hello, <b>World</b>, and hello, <i>Earth</i>.";
    // echo $sentence."<br/>";
    // echo strip_tags($sentence)."<br/>"; //remove the tags from a string
    // echo wordwrap($sentence,4,"<br>")."<br/>";
    // echo "<hr/>";
    // $numbers = [1,2,3,4,5,6,7,8,9];
    // echo min($numbers)."<br/>";
    // echo max($numbers)."<br/>";
    // echo abs(-44)."<br/>";
    // echo ceil(44.22)."<br/>";
    // echo ceil(44.77)."<br/>";
    // echo floor(55.33)."<br/>";
    // echo floor(55.99)."<br/>";
    // echo round(55.99)."<br/>";
    // echo round(55.22)."<br/>";
    // echo intdiv(44,4)."<br/>";
    // echo pow(5,2)."<br/>";
    // echo sqrt(25)."<br/>";
    // echo "<hr/>";
    // echo rand(1,100)."<br/>";
    // echo mt_rand(1,100)."<br/>"; //fast
    
    // echo "<hr/>";
    // echo date("Y-m-d  H:i:s")."<br>";
    // echo date("y-F-j")."<br>";
    // echo date("Y-M-s")."<br>";
    // echo date("Y-n-d")."<br>";
    // echo date("Y-m-d-w")."<br>";
    // echo "<hr/>";
    // // echo time("H:i:s:a")."<br>";
    // $tz=timezone_open("Asia/Kabul");
    // print_r(timezone_location_get($tz))."<br>";
    // // echo time();
    // date_default_timezone_set("Asia/Kabul")."<br>";
    // $timezone = date_default_timezone_get();
    // echo "The current server timezone is: " . $timezone."<br>";
    // echo "<hr/>";
    // echo date('h:i:s:a')."<br/>";
    // echo date('H:i:s:A')."<br/>";
    // echo date('g:i:s:A')."<br/>";
    // echo date('G:i:s:A')."<br/>";
    // echo("Kabul, Afhanistan: Date: " . date("D M d Y"));
    // echo("<br>Sunrise time: ");
    // echo(date_sunrise(time(),SUNFUNCS_RET_STRING,34.5, 69.2,90,4.5));
    // echo "<hr/>";
    // echo date('l',mktime(0,0,0,12,04,2001))."<br>";
    // echo date('d i y H;i;s',mktime(0,0,0,12,04,2001))."<br>"; //past date
    // echo date('d i y H;i;s',gmmktime(0,0,0,12,04,2001))."<br>";
    
    // echo "<hr/>";
    // $date = date_create("2025-4-23"); //future date
    // echo date_format($date,'l')."<br>";
    // echo date_format($date,'d-i,y H:i:s')."<br>";
    // echo "<hr/>";
    // echo checkdate(2,4,2000);    
    // $date1 = date_create('2001-04-12');
    // $date2 = date_create('2023-11-10');
    // $diff =  date_diff($date1,$date2);
    // print_r($diff)."<br/>";
    // echo "<br>".$diff->days;
    echo "<hr/>";
    $d = date_create('2023-11-10');
    $newd = date_add($d,date_interval_create_from_date_string("20 days"));
    // print_r($newd)
    echo date_format($newd,'y-m-d')."<br>";
    $subd = date_sub($newd,date_interval_create_from_date_string("5 days"));
    echo date_format($subd,'y-m-d')."<br>";
    
?>