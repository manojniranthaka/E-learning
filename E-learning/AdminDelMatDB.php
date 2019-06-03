<?php
require "Connect.php";

$matID = $_SERVER['QUERY_STRING'];
$delQuery = "DELETE from store where MaterialID = '$matID'";

if(!mysqli_query($con, $delQuery))
{
    die('Error : '.mysqli_error($con));
}
else
{
    $string = "You have Sucessfully Deleted Material $matID";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "AdminManageMaterials.php";
}
?>


