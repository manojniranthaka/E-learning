<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="MemberResetValidation.js"></script>
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

<form name="resetPass" onsubmit="return formPassValidate()" action="MemberResetPassDB.php" method="post" style="margin-top: 4%; margin-left: 35%">
    <table cellspacing="5" cellpadding="5">
        <caption style="margin-left: 35px"><b>Reset Password</b></caption>
        <tr>
            <td>Old Password</td>
            <td><input type="password" name="opass" required></td>
        </tr>

        <tr>
            <td>New Password</td>
            <td><input type="password" name="npass1" onblur="checkPassword1()" required><span id="enpass1" style="color: red"></span></td>
        </tr>

        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="npass2" onblur="checkPassword2()" required><span id="enpass2" style="color: red"></span></td>
        </tr>

        <tr>
            <td><input type="submit" class="buttonRight button5 changePass" onClick="javascript: return confirm('Are you sure you want to Reset your Password?');" value="Reset Password"></td>
            <td><input type="reset" value="Reset" class="buttonRight button5 reset"></td>
        </tr>
    </table>
</form>

