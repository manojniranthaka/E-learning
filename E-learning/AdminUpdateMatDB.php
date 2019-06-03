<?php
require "Connect.php";

session_start();
$matID = $_SESSION['materialIDUp'];

$name = $_POST["FMatname"];
$cat = $_POST["FCategory"];
$price = $_POST["Fprice"];
$desc = $_POST["FMatDes"];

$updatequery = "UPDATE store SET MatName = '$name', Category = '$cat', Price = '$price', Description = '$desc' WHERE MaterialID = '$matID'";

if(!mysqli_query($con, $updatequery))
{
    die('Error : '.mysqli_error($con));
}
else
{
    $string = "You have Sucessfully Updated $matID";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "AdminManageMaterials.php";
}
?>