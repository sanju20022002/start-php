<?php
$con = mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
     if(empty($_POST['fname'])){
        echo "<script>
        alert('Enter your first name');
        window.location.href='form1.php';
        echo </script>";
    }
    elseif(empty($_POST['lname'])){
        echo "<script>
        alert('Enter your last name');
        window.location.href='form1.php';
        echo </script>";
    }
    elseif(empty($_POST['phone'])){
        echo "<script>
        alert('Enter your phone number');
        window.location.href='form1.php';
        echo </script>";
    }
    else if(empty($_POST['email'])){
        echo "<script>
        alert('Enter your email');
        window.location.href='form1.php';
        echo </script>";
    }
    else{
   $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

$sql="insert into users(fname,lname,phone,email)values('$fname','$lname','$phone','$email')";
if(mysqli_query($con,$sql)){
    echo "<script>
    alert ('data inserted successfully');
    window.location.href='read.php';
    </script>";
}
}
}
?>