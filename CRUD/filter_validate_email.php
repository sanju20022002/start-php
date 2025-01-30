<?php
$email="Sanju@gmail.com";
$id="10a";
//var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
//var_dump($email);
echo filter_var($id,FILTER_SANITIZE_NUMBER_INT);
//var_dump($email);

?>