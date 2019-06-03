<?php
require "Connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header" style="padding-bottom: 1%">
    <div class="headerLeft">
        <table>
            <tr>
                <td><img src="Logo.png "></td>
            </tr>
        </table>
    </div>


    <table class="rightButtons">
        <tr>
            <td><a href="LogoutDB.php" style="text-decoration: none"><input type="button" value="Log Out"  class="buttonRight button1 logOut"></a></td>
        </tr>
    </table>

    <div class="headLine">
        E-Learning Academy
    </div>

        <nav>
            <a href="AdminHomepage.html" class="a">Home</a>
            <a href="AdminManageMaterials.php" class="a">Manage Materials</a>
            <a href="AdminViewUsers.php" class="a">View Users</a>
            <a href="AdminActivityLog.php" class="a">Activity Log</a>
        </nav>
</div>

<h2>Users Registered So far</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr><th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>User ID </th>
        <th>Username</th>
        <th>Email Address</th>
    </tr>

    <?php

    $selectString = "SELECT * FROM user ";
    $query = mysqli_query($con, $selectString);
    while ($row = mysqli_fetch_array($query)) {

        ?>
        <tr>
            <td><?php echo $row['FirstName']; ?></td>
            <td><?php echo $row['LastName']; ?></td>
            <td><?php echo $row['DateOfBirth']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['User_ID']; ?></td>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['Email']; ?></td>
        </tr>

        <?php
    }
    ?>
</table>

<footer>
    You are Logged in as Admin
</footer>
</body>
</html>
