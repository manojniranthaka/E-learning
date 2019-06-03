<?php
require "Connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
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

    <form name="Right Panel" method="post" action="MemberSearch.php">
        <table class="rightButtons">
            <tr>
                <td><a href="LogoutDB.php" style="text-decoration: none"><input type="button" value="Log Out"  class="buttonRight button1 logOut"></a></td>
            </tr>
            <tr>
                <td><input type="search" placeholder="Search" name="searchtxt" style="margin-top: 50%"></td>
            </tr>
        </table>

    <div class="headLine">
        E-Learning Academy
    </div>

    <nav>
        <a href="MemberHomepagePhp.php" class="a">Home</a>
        <a href="MemberStore.php" class="a">Store</a>
        <a href="MemberCart.php" class="a">My Cart</a>
        <a href="MemberMyProfile.php" class="a">My Profile</a>
    </nav>
</div>

<h2>Your Profile</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>
    </tr>

    <?php
    $username =  $_SESSION['userNameTemp'];
    $selectString = "SELECT * FROM user WHERE Username = '$username'";
    $query = mysqli_query($con, $selectString);
    while ($row = mysqli_fetch_array($query)) {

        ?>
        <tr><td><b>First Name</b></td><td><?php echo $row['FirstName']; ?></td></tr>
        <tr><td><b>Last Name</b></td><td><?php echo $row['LastName']; ?></td></tr>
        <tr><td><b>Date of Birth</b></td><td><?php echo $row['DateOfBirth']; ?></td></tr>
        <tr><td><b>Gender</b></td><td><?php echo $row['Gender']; ?></td></tr>
        <tr><td><b>User ID</b></td><td><?php echo $row['User_ID']; ?></td></tr>
        <tr><td><b>Username</b></td><td><?php echo $row['Username']; ?></td></tr>
        <tr><td><b>Email</b></td><td><?php echo $row['Email']; ?></td></tr>

        <?php
    }
    ?>
    <tr><td><a href="MemberResetPass.php" style="text-decoration: none"><input type="button"  value="Change Password" class="buttonRight button5 changePass"></a></td></tr>
    <tr><td><a href="MemberDelProfDB.php" style="text-decoration: none"><input type="button" class="buttonRight button5 deacProf" onClick="javascript: return confirm('Are you sure you want to Deactivate your Profile?');" value="Deactivate Profile"></a></td></tr>

</table>

<footer>
    You are Logged in as Member
</footer>
</body>
</html>


