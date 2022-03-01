<?php
    include "config/config.php"
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome To Travel Form</title>
</head>

<body>
    <style>
        *{
            text-decoration: none;
        }
        
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
            <div class="success"><p>Thanks for submitting your data. I hope for a good trip to US</p></div>
            <a href="<?php echo ROOT_URL;?>" class="btn">Exit</a>
    </div>
    <script src="index.js"></script>
</body>

</html>