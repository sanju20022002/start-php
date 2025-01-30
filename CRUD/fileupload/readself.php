<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readself</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
$con=mysqli_connect('localhost','root','','crud');
$sql="select*from createself";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?=$data['id']?></td>
            <td><?=$data['name']?></td>
            <td><img height="50px" width="50px" src="../upload/<?= $data['image']?>" alt=""></td>
            <td><a href="deleteself.php?id=<?=$data['id']?>">Delete</a></td>
            <td><a href="updateself.php?id=<?=$data['id']?>">Update</a></td>
        </tr>
        <?php
 }
}
        ?>
    </table>
</body>
</html>