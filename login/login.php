<?php
session_start();
if(isset($_SESSION['logindata'])){
    header('Location:dashboard.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='sanjupaswan200@gmail.com'&& $password==12345){
        session_start();
        $_SESSION['logindata']=$username;
        header('Location:dashboard.php');
    }else{
        echo "<script>
        alert ('username or password is not match');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form{
            margin:100px auto;
            border:1px solid;
            min-height:200px;
            width:400px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name=" username" ><br> <br>
        <input type="text"name="password"><br>
        <button type="submit"> Submit</button>
    </form>
</body>
</html>