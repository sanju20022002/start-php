<?php
// print_r($_POST);
$con= mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert 'enter your name please';
        window.location.href='self.php';
        </script>";
    }else{
        $name=$_POST['name'];
        $sql="insert into self(name)values('$name')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert ('data inserted successfully');
            window.location.href='self.php';
            </script>";
        }
    }
}
?>