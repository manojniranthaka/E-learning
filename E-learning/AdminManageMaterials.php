<?php
require "Connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Materials</title>
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

<a href="AdminAddMaterials.html" style="text-decoration: none"><input type="button" value="Add Material" class="buttonRight button4 addMat"  style="margin-top: 2%"></a>

<h2>Materials in the Store</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>
        <th>Material ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>

    <?php
        echo "<script type='text/javascript'></script>";
        $selectString = "SELECT * FROM store ";
        $query = mysqli_query($con, $selectString);
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
            <td><?php echo $row['MaterialID']?></td>
            <td><?php echo $row['MatName']; ?></td>
            <td><?php echo $row['Category']; ?></td>
                <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Description']; ?></td>

                <?php
             echo "<td>"."<a class='manMat' onClick=\"javascript: return confirm('Are you sure you want to Delete?');\" href = AdminDelMatDB.php?".$row['MaterialID'];
             echo "><input type='button' value='Delete' class='buttonRight button3 deleteMat'></a></td>";
                echo "<td>"."<a class='manMat' onClick=\"javascript: return confirm('Are you sure you want to Update?');\" href = AdminUpdateMatForm.php?".$row['MaterialID'];
                echo "><input  type='button' value='Update' class='buttonRight button5 updateMat'></a></td>";
        }
    ?>
</table>

</body>
</html>
