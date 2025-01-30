<?php
session_start();
$_SESSION['user']=['name'=>'Sanju','pass'=>'Paswan','greet'=>'Good morning'];
$_SESSION['oye']=['name'=>'Sanju','pass'=>'Paswan','greet'=>'Good morning'];

print_r($_SESSION['user']);
print_r($_SESSION['oye']);
?>