<?php
$res=fopen("tech.txt","w+");
echo fwrite($res," This is writeRead mode ");
fseek($res,0);
echo fread($res , filesize("tech.txt"));
fclose($res);
?>