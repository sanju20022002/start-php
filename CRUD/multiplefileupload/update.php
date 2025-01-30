<?php
$con=mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    if(empty($_FILES['file']['name'])){
        $imgname=$_POST['oldimg'];
    }else{
        foreach($_FILES['file']['name'] as $key=>$val){
            move_uploaded_file($_FILES['file']['tmp_name'][$key] ,"images/$val");
        }
        $imgname=implode(',',$_FILES['file']['name']);
        $sql="update multiplefile set image='$imgname' where id=$id";
        if(mysqli_query($con,$sql)){
            echo"<script>
            alert('data updated successfully');
            window.location.href='read.php';
            </script>";
        }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select*from multiplefile where id=$id";
   $result= mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0){
    while($data=mysqli_fetch_assoc($result)){
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
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="hidden" name="oldimg" value="<?=$data['image']?>">
        File: <input type="file" multiple name="file[]">
        <button type="submit">upload</button>
    </form>
</body>
</html>
<?php    
}
}
}
?>