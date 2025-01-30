<?php
$arr =["hello"=>'Sanju',"name"=>'Anuj'];
$json =json_encode($arr,JSON_PRETTY_PRINT);
echo $json;
//
$decode =json_decode($json,true);
print_r($decode);
echo $decode['hello'];
?>