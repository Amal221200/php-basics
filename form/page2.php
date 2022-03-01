<?php 
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h5>Thankyou <?php echo $name;?></h5>
</body>
</html>