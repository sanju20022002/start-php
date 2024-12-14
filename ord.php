<?php
function ordd($str){
    $count=0;
 for($i=0;$i<=strlen($str)-1;$i++){
    if(ord($str[$i])>=ord("a")&& ord($str[$i])<=ord("z")){
        $count++;
    }
 }if($count==$i){
    echo "lowercase";
 }
 else{
    echo "Uppercase";
 }
}ordd("saKJs");
?>