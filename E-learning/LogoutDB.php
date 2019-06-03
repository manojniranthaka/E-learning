<?php
require "Connect.php";

session_start();
$uname = $_SESSION['userNameTemp'];
$pwrd = $_SESSION['pword'];

if($uname == 'admin' and $pwrd == 'admin1234' )
{
    echo "<script type ='text/javascript'>alert('You have Sucessfully Logged Out from Administrator Page');</script>";
    require "Homepage.html";
    session_destroy();
}
else
{   date_default_timezone_set('Asia/Colombo');
    $date = date('Y-M-d H:i:s');
    $insertQuery = "INSERT INTO userLogOutTime (Username, Date_Time) VALUES ('$uname','$date')";
    if (!mysqli_query($con, $insertQuery)) {
        die('Error : ' . mysqli_error($con));
    }
    echo "<script type ='text/javascript'>alert('You have Sucessfully Logged Out');</script>";
    require "Homepage.html";
    session_destroy();
}
?>