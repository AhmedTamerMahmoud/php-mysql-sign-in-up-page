<?php

#header(location:'login.php');
session_start();
$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "ahmed";
$dbName = "users";

$con = mysqli_connect($dbservername, $dbUsername,$dbPassword,$dbName);

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 ){
    $_SESSION['username'] = $name;
    header('location:home.php');
    
} else{
    header('location:signin.php');
}
?>