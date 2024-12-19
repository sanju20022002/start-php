<?php
$data=fopen("text.txt","r");
// echo fread($data,1000); // 1000 chractor tk read  krega
// echo fread($data,filesize("text.txt")); //whole file read krta h
// echo fgets($data); //fierst line read krta h
// echo fgetc($data); //first charactor read krta h
while(feof($data)){
    echo fgetc($data);
}
fclose($data);
?>