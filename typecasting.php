<?php
$a=100;
$b='10';
$r=$a+$b."<br>";
echo $r;
$s1='20';
$s2='30';
$s=$s1.$s2."<br>";
echo gettype($s).$s;
$s=$s1+$s2."<br>";
echo gettype($s).$s;
?>