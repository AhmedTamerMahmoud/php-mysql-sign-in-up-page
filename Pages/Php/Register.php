<?php

#header(location:'login.php');
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
    echo "username already taken </br>";
    echo "<a href=signup.php>Sign up page</a>";
    
} else{
    $reg= " insert into usertable(name, password) value ('$name','$pass')";
    mysqli_query($con,$reg);
    header('location:redirect.php');
}
?>