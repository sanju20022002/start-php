<?php
print_r($_POST['id']);
if($_GET['id']){
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','crud');
    $sql="delete from multiplefile where id=$id";
    if(mysqli_query($con,$sql)){
        echo"<script>
        alert('Data deleted successfully');
        window.location.href='read.php';
        </script>";
    }
}else{
    header('Location:read.php');
}
?>