<?php
    require "Connect.php";
    $matID = $_SERVER['QUERY_STRING'];
    session_start();
    $_SESSION['materialIDUp'] = $matID;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Material</title>
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

<?php
$selectString = "SELECT * FROM store WHERE MaterialID = $matID";
$query = mysqli_query($con, $selectString);
while ($row = mysqli_fetch_array($query)) {
?>

<table cellspacing="9">
<tr>
    <td><b>Material ID</b></td>
    <td><?php echo $row['MaterialID']?></td>
</tr>

<tr>
    <td><b>Name</b></td>
    <td><?php echo $row['MatName']; ?></td>
</tr>

<tr>
    <td><b>Category</b></td>
    <td><?php echo $row['Category']; ?></td>
</tr>

<tr>
    <td><b>Price</b></td>
    <td><?php echo $row['Price']; ?></td>
</tr>

<tr>
    <td><b>Description</b></td>
    <td><?php echo $row['Description']; }?></td>
</tr>
</table>

<form name="UpdateForm" method="post" action="AdminUpdateMatDB.php">
    <table cellspacing="9">
        <tr>
            <td>Name</td><td><input type="text" name="FMatname"></td>
        </tr>
        <tr>
            <td>Description</td><td><input type="text" name="FMatDes"></td>
        </tr>

        <tr>
            <td>Price</td><td><input type="text" name="Fprice"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <input type="radio" name="FCategory" value="Maths"> Maths
                <input type="radio" name="FCategory" value="Science"> Science
                <input type="radio" name="FCategory" value="English"> English
            </td>
        </tr>

        <tr>
            <td><input type="submit" value="Update" class="buttonRight button5"></td>
            <td><input type="reset" value="Reset" class="buttonRight button5"></td>
        </tr>
    </table>
</form>

<footer>
You are Logged in as Admin
</footer>
</body>
</html>