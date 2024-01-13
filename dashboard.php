<?php

include 'connect.php';
session_start();
if(isset($_SESSION["login"])){
    
}
else{
    header('Location:index.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Welcome user but u cant do anything here u can sign in as admin from here:</h1>
    <a href="admin\index.php">Click Here</a>
    <h1>admin username and password:</h1>
        <h2>username:admin</h2>
        <h2>password:admin</h2>
<a href="logout.php" >LogOut</a>

        
</body>
</html>