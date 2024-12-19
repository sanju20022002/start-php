<?php
$res=fopen("demo.txt","r+");
echo fread($res , filesize("demo.txt"));
echo fwrite($res," This is write mode ");
fclose($res);
?>