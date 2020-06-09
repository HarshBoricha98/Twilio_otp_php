<?php
// Starting the session
error_reporting(0);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mx-auto mx-auto mt-5" style="width:18rem">
            <form action="otpverification" class="d-flex" method="post">
                <input type="text" class="form-control" name="user_entered_otp">
                <!-- <input type="hidden" class="form-control" name="user_entered_otp" > -->
                <input type="submit" class="btn btn-warning " value="Verify">
            </form>
        </div>
    </div>
</body>

</html>