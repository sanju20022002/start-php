<?php
print_r($_POST);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$ip='123.0.0.1'; // 123.0.0.1w invalid 
if(empty($name)){
    echo "name is required";
}elseif(empty($email)){
    echo "email is required";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Please enter a valid email";
}elseif(!filter_var($ip,FILTER_VALIDATE_IP)){
    echo "Ip address not valid";
}else{
    echo "Ip is  valid";
}
}
?>
<form action=""method="post">
    <input type="text" placeholder="name" name="name">
    <input type="text"placeholder="email" name="email">
    <input type="submit">
</form>