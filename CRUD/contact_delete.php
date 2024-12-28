<?php
// echo "delete.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $con =mysqli_connect('localhost','root','','crud');
    $sql ="delete from contact where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert ('data deleted successfully');
        window.location.href='contact_table.php';
        </script>";
    }
}else{
    header('Location:contact_table.php');
}
?>