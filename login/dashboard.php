<?php
session_start();
if(!isset($_SESSION['logindata'])){
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        section{
            height:300px;
            width:300px;
            outline:10px double pink;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius:50px 50px 0px 50px;
        }
    </style>
</head>
<body>
<center>
<h1>Welcome to dashboard!</h1>
<section>
<h4><?= $_SESSION['logindata']?></h4>
<div>
<a href="logout.php" style="text-decoration:none;
height: 60px;width:150px;border:2px solid pink;border-radius:8px;padding:10px 20px;">Logout</a>
</div>
</section>
</center>
</body>
</html>