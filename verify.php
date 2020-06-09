<?php

// Starting the session
error_reporting(0);
session_start();

// including database
include './config/database.php';

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Create .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Getting SID and AUTH_TOKEN from twilio account for access
$account_sid = $_ENV["SID"];
$auth_token = $_ENV["AUTH_TOKEN"];

// Taking the user's phone number from POST
$phone_number = $_POST['phoneNumber'];
$otp = rand(111111, 999999);

// A Twilio number you own with SMS capabilities
$twilio_number = "+12562803412";

$client = new Client($account_sid, $auth_token);
$response = $client->messages->create(
    // Where to send a text message (your cell phone?)
    '+91' . $phone_number,
    array(
        'from' => $twilio_number,
        'body' => 'Your OTP is ' . $otp,
    )
);

if ($response) { //check if the response exist
    // If the response exist then insert into database.
    $sql = "INSERT INTO `users` (`id`, `phoneNo`, `otp`) VALUES (NULL, '$phone_number', '$otp')";
    $conn->query($sql);

    // Store the info into session variables
    $_SESSION['phonenumber'] = $phone_number;
    $_SESSION['otp'] = $otp;

    //Redirecting the request to otp login page
    header('location: otplogin.php');
}
?>