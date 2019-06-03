<?php
require "Connect.php";

session_start();
$uname = $_SESSION['userNameTemp'];
$tempCart = "cart$uname";

$matID = $_SERVER['QUERY_STRING'];
$matname = "";
$matCat = "";
$matprice = 0;
$matdes = "";



    $selectString = "SELECT * FROM store where MaterialID = '$matID'";
    $query = mysqli_query($con, $selectString);
    while ($row = mysqli_fetch_array($query)) {
        $matname = $row['MatName'];
        $matCat = $row['Category'];
        $matprice = $row['Price'];
        $matdes = $row['Description'];
    }

    $insertString = "INSERT INTO $tempCart VALUES ('$matID','$matname','$matCat','$matprice','$matdes')";

    if (!mysqli_query($con, $insertString)) {
        echo "<script type ='text/javascript'>alert('You have Already Added $matname to the Cart');</script>";
        require "MemberStore.php";
    } else {
        echo "<script type ='text/javascript'>alert('You have Sucessfully Added $matname to the Cart');</script>";
        require "MemberStore.php";
    }


?>
