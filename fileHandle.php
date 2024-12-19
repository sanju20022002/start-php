<?php
$res=fopen("img29.png","r");
// echo fread($res,filesize("img29.png"));
$photo=fread($res,filesize("img29.png"));
$dest=fopen("newname.png","w");
fwrite($dest,$photo);
fclose($dest);
fclose($res);
?>