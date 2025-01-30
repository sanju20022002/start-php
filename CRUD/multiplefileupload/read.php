<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>file</th>
            <th>delete</th>
            <th>update</th>
        </tr>
 <?php
$con =mysqli_connect('localhost','root','','crud');
$sql="select*from multiplefile";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($data=mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?=$data['id']?></td>
            <td>
                <?php
$img=explode(',',$data['image']);
foreach($img as $val){
                ?>
            <img src="images/<?=$val?>" alt=""height="70px"width="70px">
        <?php
}
?>
        </td>
            <td><a href="delete.php?id=<?=$data['id']?>">Delete</a></td>
            <td><a href="update.php?id=<?=$data['id']?>">Update</a></td>
        </tr>
<?php
        
    }
}

?>
    </table>
</body>
</html>