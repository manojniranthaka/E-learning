<?php
require "Connect.php";
session_start();

$oldpass = $_POST['opass'];
$npass1 = $_POST['npass1'];
$npass2 = $_POST['npass2'];
$username =  $_SESSION['userNameTemp'];

$searchString = "SELECT Password FROM user WHERE Username = '$username'";
$query = mysqli_query($con, $searchString);
$row = mysqli_fetch_array($query);
$pass = $row['Password'];

if ( $pass === $oldpass ) {
    $updateQuery = "UPDATE user SET Password = '$npass1' WHERE Username = '$username'";
    mysqli_query($con, $updateQuery);
    echo "<script type='text/javascript'>alert('You Have Successfully Changed the Password !')</script>";
    require "MemberHomepagePhp.php";
}
else
{
    echo "<script type='text/javascript'>alert('The Entered Password is Incorrect !')</script>";
    require "MemberResetPass.php";
}
