<form action="" method="post">
    Name: <input type="text" name="name">
    Email: <input type="text" name="email">
    <input type="submit" value="validation"name="validate">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['validate'])){
        if(empty($_POST['name'])){
            echo "Nmae is required";
        }elseif(empty($_POST['email'])){
            echo "email field is required";
        }else{
            echo $_POST['name'];
            echo $_POST['email'];
        }
    }
}
?>