
<!--WE ARE NOT USING THIS FILE AT ALL-->




<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Home</title>
</head>
<body>
    <h1> I am a patient</h1>
    <a href="logout.php">logout</a>
</body>
</html>
