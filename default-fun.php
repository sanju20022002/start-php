<?php
function defaultPara($age=18,$a=0){
if($age>=18){
    return "Eligible for vote";
}else{
    return "Not eligible for vote";
}
}echo defaultPara(5);
?>