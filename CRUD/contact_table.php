<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>batch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

.admin-batch-container {
    min-height: 300px;
    width: 80%;
    background: #f5f0ed;
    margin: 50px auto;
    padding-bottom: 50px;

}

.admin-batch-text {
    font-size: 20px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}

.admin-batch-button {
    width: 100%;
    min-height: 50px;
    padding: 15px;
}

.admin-batch-bLink {
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 0.5px;
    word-spacing: -2px;
    padding: 6px;
    color: #fff;
    background: #389af0;
    border: none;
    float: right;
}

.admin-batch-bLink:hover {
    outline: 2px solid #389af0;
    background: #fff;
    color: #389af0;
    transition: all ease-in-out 0.3s;
}



.admin-batch-tableOuter {
    width: 98%;
    padding: 20px;
    border-collapse: collapse;
    margin: auto;
}

.admin-batch-tableHead {
    border: 1px solid rgb(83, 82, 82);
    padding: 10px;
    background: #153450;
    color: #fff;
}
.admin-batch-tableData {
    border: 1px solid rgb(83, 82, 82);
    padding: 30px;
    color: #000;
}

.admin-batch-img {
    width: 60px;
    height: 60px;

}

.admin-batch-tdText {
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
}

.admin-batch-actionLink {
    display: flex;
    justify-content: space-evenly;
    text-decoration: none;
    color: #000;
    word-spacing: 5px;

    font-size: 20px;
}

.admin-batch-buttonIcon {
    padding: 2px 10px;
    background: #153450;
    border: 1px solid #ccc;
    color: #fff;
}
        </style>
</head>

<body>
    <div class="admin-batch-container">
        <h2 class="admin-batch-text"><i class="fa fa-file"></i>Contact</h2>

        <div class="admin-batch-button">
            <a href="contact.php" class="admin-batch-bLink">Contact php</a>

        </div>



        <table class="admin-batch-tableOuter">
            <thead>
                <tr>
                    <th class="admin-batch-tableHead">id</th>
                    <th class="admin-batch-tableHead">name</th>
                    <th class="admin-batch-tableHead">message</th>
                    <th class="admin-batch-tableHead">phone</th>
                    <th class="admin-batch-tableHead">email</th>
                  
                    <th class="admin-batch-tableHead">Action</th>

                </tr>
            </thead>

            <tbody>
                <?php
$con = mysqli_connect('localhost','root','','crud');
$sql = "select*from contact";
$result =mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($record=mysqli_fetch_assoc($result)){
    
?>
                <tr>
                   <th><?=$record['id']?></th>
                   <td><?=$record['name']?></td>
                   <td><?=$record['message']?></td>
                   <td><?=$record['phone']?></td>
                   <td><?=$record['email']?></td>
                   <td><a  class="admin-batch-bLink" href="contact_delete.php?id=<?=$record['id']?>"><i class="fa fa-file"></i>delete</a></td>

                   <td><a  class="admin-batch-bLink" href="contact_update.php?id=<?=$record['id']?>"><i class="fa fa-file"></i>update</a></td>
                </tr>
<?php    
    }
}
?>
            </tbody>

        </table>

    </div>


</body>

</html>