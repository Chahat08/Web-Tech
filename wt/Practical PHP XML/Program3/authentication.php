<?php
include("C:\xampp\login\connection.php");
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1)
{
    echo "Login Sucessful!";
}

else
{
    echo "Invalid username or password!";
}
?>