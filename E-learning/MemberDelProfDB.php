<?php
require "Connect.php";
session_start();
$username =  $_SESSION['userNameTemp'];

$deleteQuery = "DELETE FROM user WHERE Username = '$username'";
$dropQuery = "DROP TABLE cart$username";

mysqli_query($con, $deleteQuery);
mysqli_query($con, $dropQuery);

echo "<script type='text/javascript'>alert('You Account Has Been Deactivated')</script>";
require "LogoutDB.php";