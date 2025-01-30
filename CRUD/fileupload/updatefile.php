<?php
// print_r($_POST);
$con=mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
   $id=$_POST['id'];
   $name=$_POST['name'];
   if(empty($_FILES['image']['name'])){
    $filename=$_POST['oldimage'];
   }else{
    $filename=time().$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname,"../upload/$filename");
   }
   $sql="update createfile set name='$name',image='$filename' where id=$id";
   if(mysqli_query($con,$sql)){
    echo "<script>
    alert ('File update successfully');
    window.location.href='readfile.php';
    </script>";
   }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select*from createfile where id=$id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $single=mysqli_fetch_assoc($result);
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
Name: <input type="text" name="name"value="<?=$single['name'] ?>">
 <input type="hidden" name="id"value="<?=$single['id'] ?>">
File: <input type="file" name="image">
<input type="hidden" name="oldimage"value="<?=$single['image'] ?>">
<img src="../upload/<?=$single['image']?>" alt="" height="50px" width="50px">
<button type="submit"> submit</button>
    </form>
</body>
</html>
<?php
 }   

?>