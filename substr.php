<?php
$str ="Sanju Pasawn";
$str1="Sanju PASWAN";
$a=100;
$b=100;
echo substr($str,1,8)."<br>";
echo strpos($str,"P")."<br>";
echo strcmp($str,$str1)."<br>";
echo strcmp($b,$a)."<br>";
if($str===$str1){
    echo 0;
}else{
    echo 1;
}
?>