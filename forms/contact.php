<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
sleep(1);
include('../sql/connection.php');

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    $user_query_run = "INSERT INTO contactform (name,email,subject,message) VALUES ('$Name','$Email','$Subject','$Message')"; 
    $user_quesy_run = mysqli_query($con,$user_query_run);


?>


</body>
</html>