<?php
// print_r($_POST);
// print_r($_FILES);
$con=mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert ('name is required');
        </script>";
    }elseif(empty($_FILES['image']['name'])){
        echo "<script>
        alert ('image is required');
        </script>";
    }else{
        $name=$_POST['name'];
        $filename=time().$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"../upload/$filename");
        $sql="insert into createfile4 (name,image) values('$name','$filename')";
        if (mysqli_query($con,$sql)){
            echo "<script>
            alert ('file uploaded successfully');
            window.location.href='readfile4.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fileupload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name">
File: <input type="file" name="image">
<button type="submit"> submit</button>
    </form>
</body>
</html>