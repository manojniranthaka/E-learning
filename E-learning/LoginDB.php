<?php
require "Connect.php";

$uname = $_POST["userName"];
$password = $_POST["password"];

session_start();
$_SESSION['userNameTemp'] = $uname;
$_SESSION['pword'] = $password;

$searchQuery = "SELECT*FROM User WHERE Username = '$uname' and Password = '$password' ";

$result = mysqli_query($con, $searchQuery);
$count = mysqli_num_rows($result);

if($uname == 'admin' and $password == 'admin1234')
{
    echo "<script type ='text/javascript'>alert('You have Sucessfully Logged In as Administrator');</script>";
    require "AdminHomepage.html";
}
else if ($count == 1 ) {
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-M-d H:i:s');
        $insertQuery2 = "INSERT INTO userLogTime (Username, Date_Time) VALUES ('$uname','$date')";

        if (!mysqli_query($con, $insertQuery2)) {
            die('Error : ' . mysqli_error($con));
        }
        echo "<script type ='text/javascript'>alert('You have Sucessfully Logged In');</script>";
        require "MemberHomepagePhp.php";

}
else
{
    echo "<script type ='text/javascript'>alert('Log In Failed. Please try Again');</script>";
    require "LogIn.html";
}
?>