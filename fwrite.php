<?php
$res=fopen("demo.txt","w");
$data="Meditation is a powerful tool for maintaining a healthy mind and body. It helps reduce stress, anxiety, and negative thoughts, ";
 echo fwrite($res,$data);
fclose($res);
?>