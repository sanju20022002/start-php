<?php
//Factorial With Anonymous Funtion
$anonymous=function($n){
    $fact=1;
    for($i=1;$i<=$n;$i++){
        $fact=$fact*$i;
    }echo $fact;
};   //yha semiolon lgana compulsury h
$anonymous(4);
?>