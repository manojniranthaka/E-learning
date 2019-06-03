<?php
require "Connect.php";

session_start();
$matID = $_SERVER['QUERY_STRING'];
$uname = $_SESSION['userNameTemp'];
$tempCart = "cart$uname";


$delQuery = "DELETE from $tempCart where MaterialID = '$matID'";

if(!mysqli_query($con, $delQuery))
{
    die('Error : '.mysqli_error($con));
}
else
{
    $string = "You have Sucessfully Removed Material ID : $matID from your cart";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "MemberCart.php";
}
?>