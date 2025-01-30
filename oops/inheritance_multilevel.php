<?php
class Dada{
    function demo(){
        echo "I am Dada";
    }
}class Papa extends Dada{
    function demo1(){
        echo "I am Papa";
    }
}class Beta extends Papa{
    function demo2(){
        echo "I am Sanju";
    }
}
$beta =new Beta;
$beta->demo();
$beta->demo1();
$beta->demo2();
?>