<?php
require "Connect.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $insertQuery = "INSERT INTO user (FirstName, LastName, DateOfBirth, Gender, Username, Email, Password) VALUES ('$fname','$lname', '$dob', '$gender', '$uname','$email','$password')";
    $createQuery = "CREATE TABLE cart$uname (MaterialID int PRIMARY KEY, MatName text, Category varchar(30), Price float, Description varchar(50))";

    if(!mysqli_query($con, $createQuery)) {
        die('Error : ' . mysqli_error($con));
    }
    else {
        if (!mysqli_query($con, $insertQuery)) {
            die('Error : ' . mysqli_error($con));
        } else {
            echo "<script type ='text/javascript'>alert('You have Sucessfully Registered');</script>";
            require "Homepage.html";
        }
    }
