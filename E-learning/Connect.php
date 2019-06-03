<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "iwtproject";

$con = mysqli_connect("$host", "$user", "");

if( !mysqli_select_db($con, $database))
{
    die(mysqli_error($con));
}
?>