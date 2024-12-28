<?php
// print_r($_POST);
$con=mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['country'])){
        echo "<script>
        alert ('select any country name');
        window.location.href='class.php';
        </script>";
    }
    elseif(empty($_POST['greeting'])){
        echo "<script>
        alert ('plese check minimum one checkbox');
        window.location.href='class.php';
        </script>";
    }
    else{
        $country=$_POST['country'];
        $greeting=implode(',',$_POST['greeting']);
    
        $sql="insert into class(country,greeting)values('$country','$greeting')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert ('data inserted successfully');
            window.location.href='class.php';
            </script>";
        }
    }
}
?>