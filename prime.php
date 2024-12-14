<?php
function prime($n){
    $count=0;
    if($n>1){
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                $count++;
                break;
            }
        }
        if($count==0){
            echo "prime number";
        }else{
            echo "not prime number";
        }
    }
} prime(8);
?>