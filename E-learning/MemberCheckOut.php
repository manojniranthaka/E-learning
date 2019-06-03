<?php
session_start();
$total = $_SESSION['cartTot'];
$rows = $_SESSION['rows'];
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
    </form>

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

<h3>Bill Summary</h3>

<table style="border-bottom: black solid; margin-bottom: 1%">
    <tr>
        <td><B>Total Items &nbsp;&nbsp;&nbsp;: </B><?php echo $rows?></td>
    </tr>
    <tr>
        <td><B>Total Amount :</B> Rs.<?php echo $total?></td>
    </tr>
</table>

<table cellpadding="8">
    <form name="Checkout" method="post" action="MemberHomepagePhp.php">
        <tr>
            <td>Choose Card Type</td>
            <td><input type="radio" name="CardType" value="CC" required> Credit Card
                <input type="radio" name="CardType" value="DC" required> Debit Card
            </td>
        </tr>
        <tr>
            <td>Enter Card Number</td>
            <td><input type="number" name="PINNo" placeholder=" XXXX-XXXX-XXXX-XXXX" required minlength="16" maxlength="16"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Pay" class="buttonRight button2 pay"></td>
            <td><input type="reset" value="Reset" class="buttonRight button2 reset"></td>
        </tr>
    </form>
</table>

