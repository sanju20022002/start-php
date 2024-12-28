<?php
$con = mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
     if(empty($_POST['name'])){
        echo "<script>
        alert('Enter your  name');
        window.location.href='contact.php';
        echo </script>";
    }   
    elseif(empty($_POST['phone'])){
        echo "<script>
        alert('Enter your phone number');
        window.location.href='contact.php';
        echo </script>";
    }
    else if(empty($_POST['email'])){
        echo "<script>
        alert('Enter your email');
        window.location.href='contact.php';
        echo </script>";
    }
    else if(empty($_POST['message'])){
        echo "<script>
        alert('Enter your message');
        window.location.href='contact.php';
        echo </script>";
    }
    else{
   $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

$sql="insert into contact(name,phone,email,message)values('$name','$phone','$email','$message')";
if(mysqli_query($con,$sql)){
    echo "<script>
    alert ('data inserted successfully');
     window.location.href='contact_table.php';
    </script>";
}
}
}
?>