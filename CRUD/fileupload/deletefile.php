<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','crud');
    $sql="delete from createfile where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert ('data deleted successfully');
        window.location.href='readfile.php';
        </script>"; 
    }
}else{
    header('Location:readfile.php');
}
?>