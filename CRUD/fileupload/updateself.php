<?php
// print_r($_FILES);
$con=mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo"<script>
        alert('name is required');
        <script>";
    }elseif(empty($_FILES['image']['name'])){
        echo"<script>
        alert('image  is required');
        <script>";
    }else{
        $id=$_POST['id'];
        $name=$_POST['name'];
        $file=$_FILES['image']['name'];
        $sql="update createself set name='$name' image='$file' where id=$id";
        if(mysqli_query($con,$sql)){
            echo"<script>
    alert('data updated successfully');
    window.location.href='readself.php';
        </script>";
        }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select*from createself where id=$id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($data=mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fileuploadSelf</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name" value="<?=$data['name']?>">
<input type="hidden" name="id"value="<?=$data['id']?>">
File: <input type="file" name="image">
<input type="hidden" name="oldimg"value="<?=$data['image']?>">
<button type="submit"> submit</button>
    </form>
</body>
</html>
<?php
 }     
}
}
?>