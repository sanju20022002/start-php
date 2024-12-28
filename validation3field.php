<?php
$nameerror=$emailerror=$numbererror'';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['validate'])){
        if(empty($_POST['name'])){
           header('Location:validation3_field.php?nameerror=Name field is reqiuired');
        }elseif(empty($_POST['email'])){
            header('Location:validation3_field.php?emailerror=Email field is reqiuired');
        }elseif(empty($_POST['number'])){
            header('Location:validation3_field.php?numbererror=number field is reqiuired');
        }else{
            echo "my name is" .$_POST['name'].
            " email is" .$_POST['email'].
            "and number is" .$_POST['number'];
        }
    }
}else{
    echo "invalid request";
}
?>