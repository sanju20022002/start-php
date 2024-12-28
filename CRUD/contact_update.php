<?php
// print_r($_POST);
$con= mysqli_connect('localhost','root','','crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert ('Name must be required');
        </script>";
    }elseif(empty($_POST['phone'])){
        echo "<script>
        alert ('Phone must be required');
        </script>";
    }elseif(empty($_POST['email'])){
        echo "<script>
        alert ('Email must be required');
        </script>";
    }elseif(empty($_POST['message'])){
        echo "<script>
        alert ('Message must be required');
        </script>";
    }else{
        $id=$_POST['id'];
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      $sql="update contact set name='$name',phone='$phone',email='$email',message='$message' where id=$id";
      if(mysqli_query($con,$sql)){
        echo "<script>
        alert ('data Updated successfully');
         window.location.href='contact_table.php';
        </script>";
      }
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select* from contact where id=$id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
$data=mysqli_fetch_assoc($result);
echo $data['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;

} 
.main-container{
    min-height: 400px;
    width: 100%;
    max-width: 800px;
    background-color: #eeeeee;  
    border-radius: 20px; 
    align-items: center; 
    margin-top: 7px;
}
.reg-heading{
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 800;
    line-height: 24px;
    font-weight: 500;
    letter-spacing: 3px;
    background-color: #002233;
    padding-top:20px;
    padding-bottom: 20px;
    color: #ffffff;
    border-radius: 10px 10px 0px 0px;
}
.main-container:hover{
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.input-row {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 5px;
    margin-right:30px;  
}
.input-box{
    display: flex;
    flex-direction: column;
    width: 48%;
    margin-bottom: 5px;
}
.reg-label{
    font-size: 18px;
    font-weight: 500;
    padding-left: 20px;  
    color: #002233;
}
.reg-input{
    box-sizing: border-box;
    padding: 10px 5px;
    margin-left: 20px;
    margin-bottom: 5px;  
    font-size: 17px;
    outline: none;
    font-weight: 500;
    border-top: none;
    border-left: none;
    border-right: none;
    background: none;
}
.reg-input:hover{
    transform: translate(3px, 1px);
}
.button{
    text-align: center;
    margin-top: 40px; 
    margin-bottom: 40px;   
}
.reg-button{
    width: 30%;
    padding: 13px 20px;
    border-radius: 20px;
    font-weight: 400;
    font-size: 16px;
    background-color: #002233;
    color: #ffffff;
    border: none;
    letter-spacing: 2px;
}
.reg-button:hover{
    cursor: pointer;
    background-color: #45a049;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.reg-link{
    background: #002233;
    padding-bottom: 20px;
    border-radius: 0px 0px 10px 10px;
}
.reg-h5{
    text-align: center;
    margin-top: 30px;
    font-size: 17px;
    font-weight: 400;
    color: #ffffff;
    letter-spacing: 2px;
    padding-top: 20px;
}
.reg-link a{
    color: #ffffff;
    letter-spacing: 2px;
}
@media (max-width: 600px) {
    .main-container{
        width: 90%;
    }
    .input-row {
        width: 90%;
    }
    .input-box {
        width: 100%;
        margin-left: 10px;
    }
    .reg-input {
        margin-left: 10px;
    }
    .reg-button {
        width: 98%;
        margin-left: 0px;
        margin-right: 0px;
    }
}
    </style>
</head>
<body>
   <div class="main-container">
        <!-- Form Section Start -->
            <form action="" method="post">
                <h2 class="reg-heading">UPDATE_CONTACT</h2>

                <div class="input-row">

                    <div class="input-box">
                        <label for="name" class="reg-label"> Name:</label> 
                        <input type="text"  class="reg-input"  name="name" value="<?= $data['name']?>">
                    </div>
                    <div class="input-box">    
                        <label for="message" class="reg-label">Messsage</label>
                        <textarea name="message" id=""><?= $data['message']?></textarea>   
                    </div>

                </div>    


                <div class="input-row">

                    <div class="input-box"> 
                        <label for="name" class="reg-label">Phone:</label>
                        <input type="number" class="reg-input" name="phone" value="<?= $data['phone']?>">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Email:</label>
                        <input type="email" class="reg-input" name="email"value="<?= $data['email']?>">    
                    </div>
                    <div class="input-box">
                        <input type="hidden" class="reg-input" name="id"value="<?= $data['id']?>">    
                    </div>

                </div>
                <!-- <div class="button"> -->
                    <div class="button">
                     <button type="submit" class="reg-button">Submit</button>
                    </div> 
                <!-- </div> -->
                <div class="reg-link">
               
                </div> 
            </form>  
        <!-- Form Section End -->
    </div>
    
</body>
</html>
<?php
  }
}else{
    header('Location:contact_table.php');
}
?>
