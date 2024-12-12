<?php
//Arithmetic operator
$a=40;
$b=30;
$sum=$a+$b;
echo "Add ".$sum."<br>";

$sub=$a-$b;
echo"sub ". $sub."<br>";

$mul=$a*$b;
echo"mul ". $mul."<br>";

$div=$a/$b;
echo "div ".$div."<br>";

$mod=$a%$b;
echo "mod ".$mod."<br>";

$exp=$a^$b;
echo "exp ". $exp."<br>";
//assignment operator
$a=40;
$a+=10;
echo"Add ". $a."<br>";

$a=40;
$a-=10;
echo"sub ". $a."<br>";

$a=20;
$a*=2;
echo "mul ".$a."<br>";
//concatanation
$a="Sanju ";
$b=" Paswan";
echo"Name = ".$a.$b."<br>";
//comparision operator
$a="Sanju";
$v=$a=="Sanju";
var_dump($v);
echo "<br>";

echo $v."<Br>";
$a=20;
$v1=$a>=10;
var_dump($v1);
echo "<br>";
echo "Logical operator <br>";
//Logical Operator
$al=10;
$bl=20;
$l=$al||$bl;
echo $l."<br>";

$al=10;
$bl=20;
$l=$al&&$bl;
echo $l."<br>";

$al=10;
$bl=10;
$l=$al!=$bl;
echo $l."false <br>";

//Unery Operator
echo "Unery operator <br>";
$au=10;
$bl=10;
$l=$al!=$bl;
echo $au++ ."<br>";
echo $au++ ."<br>";
echo $au++ + ++$au."<br>";
echo $au++ - ++$au."<br>";
echo ++$au ."<br>";
echo ++$au ."<br>";
echo ++$au + ++$au."<br>";
echo ++$au - $au++."<br>";
//Ternary Operator isme block nhi bnta h inline statement print krane k liye iska use kiya jata h
echo "Ternary operator <br>";
$a=9;
$b=10;
echo $a!=$b ?"Sanju" :"Anju";
?>