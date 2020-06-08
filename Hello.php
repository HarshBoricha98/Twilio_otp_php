<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    </div>
</body>
</html>

<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Create .env 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$account_sid = $_ENV["SID"];
$auth_token = $_ENV["AUTH_TOKEN"];

// Taking the user's phone number from POST 
$phone_number = $_POST['phoneNumber'];

// A Twilio number you own with SMS capabilities
$twilio_number = "+12562803412";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+91'.$phone_number,
    array(
        'from' => $twilio_number,
        'body' => 'Hola Amigo 👀! This is Harsh. Stay 🏠 Stay Safe 🙌',
    )
);
?>