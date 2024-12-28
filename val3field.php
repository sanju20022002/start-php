<?php
// $nameerror=$emailerror=$numbererror='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['validate'])){
        if(empty($_POST['name'])){
            header('Location:val3.php?nameerror=Name field is reqiuired');
        }if(empty($_POST['email'])){
            header('Location:val3.php?emailerror=Email field is reqiuired');
            if(empty($_POST['number'])){
                header('Location:val3.php?numbererror=Number field is reqiuired');
        }if(!empty ($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number'])){
            echo "my name is" .$_POST['name'].
            "and email is" .$_POST['email'].
            "number is" .$_POST['number'];
        }
    }
}
}else{
    echo "invalid request";
}
?>