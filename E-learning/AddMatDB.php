<?php
require "Connect.php";

$MatID = $_POST["MatID"];
$Matname = $_POST["Matname"];
$Category = $_POST["Category"];
$MatDes = $_POST["MatDes"];
$price = $_POST["price"];

$insertQuery = "INSERT INTO store VALUES ('$MatID','$Matname','$Category','$price', '$MatDes')";

if(!mysqli_query($con, $insertQuery))
{
    die('Error : '.mysqli_error($con));
}
else
{
    echo "<script type ='text/javascript'>alert('You have Sucessfully Added the Material');</script>";
    require "AdminManageMaterials.php";
}