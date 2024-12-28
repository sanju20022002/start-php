<?php
// local variable
echo "<br> Local variable";
function demo(){
    $x=10;
    $y=20;
    echo $x,$y;
}
demo();

//Gloval variable
echo "<br> Gloval variable";
$a=10;
function demo2(){
    global $a; //yha btana padhta h ki yh variable global h
    echo $a;
}
demo2();

//Static variable
echo " <br>Static variable ";
function staticVariable(){
    static $b=10;
    $b++;
    echo $b;
}staticVariable();
echo "<br>";
staticVariable();
?>