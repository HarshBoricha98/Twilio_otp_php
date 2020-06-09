<?php


// Starting the session
error_reporting(0);
session_start();
include('./config/database.php');

// Take the session data into a variable for finding it in the database.
$phone_number = $_SESSION['phonenumber'];
$otp = $_SESSION['otp'];

// Take the user enterd OTP number from POST request
$user_entered_otp = $_POST['user_entered_otp'];

// Find the user via phone number and check if the entered OTP == database OTP
$sql = "SELECT * FROM `users` WHERE `users`.`phoneNo`='$phone_number' ORDER BY `id` DESC LIMIT 1" ;
$conn->query($sql);
$result = mysqli_fetch_assoc($sql);
// print($result);

?>