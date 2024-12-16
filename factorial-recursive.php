<?php
function number($num){
    if($num<0){
        return 0;
    }
    if($num==0){
        return 1;
    }
    return "facto".$num*number($num-1);
}
echo number(3);
?>