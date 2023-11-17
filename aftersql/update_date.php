<?php

$server = "localhost";
$db = "crud";
$user = "root";
$pass = "";
$con = mysqli_connect($server,$user, $pass, $db) or die("Couldn't connect");

$stdid = $_POST['id'];
$student_name = $_POST['name'];
$student_address = $_POST['address'];
$student_class = $_POST['class'];
$student_phone = $_POST['phone'];

$sql = "UPDATE student SET sname='{$student_name}', saddress='{$student_address}', sclass='{$student_class}', sphone='{$student_phone}' WHERE sid = '{$stdid}'";

$query = mysqli_query($con, $sql) or die("Error, cannot execute query");

if ($query){
    header("Location: index.php");
    exit();
}



?>