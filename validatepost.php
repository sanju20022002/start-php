<?php
$nameerror=$emailerror='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['validate'])){
        if(empty($_POST['name'])){
           header('Location:validation3.php?nameerror=Name field is reqiuired');
        }elseif(empty($_POST['email'])){
            header('Location:validation3.php?emailerror=Email field is reqiuired');
        }else{
            echo "my name is" .$_POST['name'].
            "and email is" .$_POST['email'];
        }
    }
}else{
    echo "invalid request";
}
?>