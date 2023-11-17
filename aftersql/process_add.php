<?php
$server = "localhost";
$db = "crud";
$user = "root";
$pass = "";
$con = mysqli_connect($server,$user, $pass, $db) or die("Couldn't connect");
$query = "SELECT * FROM studentclass";
$sql = mysqli_query($con,$query) or die("Couldn't execute query");

$student_name = $_POST['name'];
$student_address = $_POST['address'];
$student_class = $_POST['class'];
$student_phone = $_POST['phone'];

$sql = "INSERT INTO STUDENT (sname,saddress,sclass,sphone) VALUES ('$student_name', '$student_address', '$student_class', '$student_phone')";

$query = mysqli_query($con, $sql) or die("Error, cannot execute query");

if ($query){
    header("Location: index.php");
    exit();
}

?>