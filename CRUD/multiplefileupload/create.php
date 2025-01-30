<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:login.php')
}
// print_r($_FILES);
$con =mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
foreach($_FILES['file']['name'] as $key=>$val){
    // echo $val;
    // echo $_FILES['file']['tem_name'][$key];
    move_uploaded_file($_FILES['file']['tmp_name'][$key],"images/$val");
}
$image=implode(',',$_FILES['file']['name']);
$sql="insert into multiplefile (image)values('$image')";
if(mysqli_query($con,$sql)){
    echo "Images Uploaded";
    header('Location:read.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple file</title>
</head>
<body>
    <form action=""method="post" enctype="multipart/form-data">
        File: <input type="file" multiple name="file[]" >
        <button type="submit">upload</button>
    </form>
</body>
</html>