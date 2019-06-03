<?php
require "Connect.php";
session_start();

$uname = $_SESSION['userNameTemp'];
$tempCart = "cart$uname";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
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



    <?php
    $total = 0;
    $selectString = "SELECT * FROM $tempCart ";
    $query = mysqli_query($con, $selectString);
    $num = mysqli_num_rows($query);

    if ( $num == 0)
    {
        echo "<h1 style='text-align: center; margin-bottom: 12%; margin-top: 12%'>Your Cart is Empty !</h1>";

    }
    else{?>
<h2>Materials in the Store</h2>
<table border="0" cellspacing="6" cellpadding="6">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
    </tr>

        <?php
    while ($row = mysqli_fetch_array($query))
    {


    ?>
        <tr>
            <td><?php echo $row['MatName']; ?></td>
            <td><?php echo $row['Category'];?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <?php
            echo "<td>"."<a class='manMat' href = MemberDelCartDB.php?".$row['MaterialID'];
            echo "><input type='button' value='Remove' class='buttonRight button3 removefromCart'></a></td>";?>
        </tr>

        <?php
        $price = $row['Price'];
        $total += $price;
    }?>
        <tr>
        <td><a href="MemberCheckOut.php" style="text-decoration: none"><input type="button" value="Proceed to CheckOut" class="buttonRight button6 checkoutfromCart"></a></td>
    </tr>

    <?php
    $_SESSION['cartTot'] = $total;
    $rows = mysqli_num_rows($query);
    $_SESSION['rows'] = $rows;
    ?>
</table>

    <?php
    }
    ?>

<footer>
    You are Logged in as Member
</footer>
</body>
</html>


