<?php
function hello(){
    echo "Hii..Sanju"."<br>";
}
hello();
function hi(){   //no return type
    echo "no return type"."<br>";
    for($i=0;$i<=10;$i++){
        echo $i."<br>";
        
    }
}hi();

function hey(){   // return type without parameter return  one value
    echo "return type one value"."<br>";
    for($i=0;$i<=10;$i++){
        $a= $i."<br>";
    }
    return $a;
}echo hey();

function oye(){   // return type whole value
    echo " return type whole value"."<br>";
    for($i=0;$i<=10;$i++){
        $b[]= $i."<br>";
    }
    return $b;
} print_r(oye());

// parameterise funtion
function calculator($n1,$n,$n2){
// echo $n1.$n.$n2."=".$n1.$n.$n2;
echo "<br>parameterise funtion<br>";
echo $n1.$n.$n2." = ";
if($n=='+'){
    echo $n1+$n2;
}
if($n=='-'){
    echo $n1-$n2;
}
if($n=='*'){
    echo $n1*$n2;
}
if($n=='/'){
    echo $n1/$n2;
}
if($n=='%'){
    echo $n1%$n2;
}
}
calculator(6,"*",6);


// 
function tab($n){   //no return type
    // echo "no return type"."<br>";
    for($i=1;$i<=10;$i++){
        echo $n*$i."<br>";   
    }
}tab(4);
function str($s,$p){
    echo strrev($s,$p);
    
}str("Sanju","Paswan")
?>


