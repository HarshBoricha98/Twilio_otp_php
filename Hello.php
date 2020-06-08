<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
        <div class="card mx-auto mt-5" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title text-center">SUCCESS</h3>
                <p class="card-text p-3">Check 👀 your 📱 for the secret message....</p>
                <a href="/logtp" class="btn btn-success w-100">Done</a>
            </div>
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