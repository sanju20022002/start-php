<?php
class demo2{
    function __destruct()        //yh sbse last m execute hota h
    {
        echo "Hello Destruct ji ";
    }
    function __construct()     //yh sbse phle automatically call hota h aur sbse 
    {
        echo " hellloooo constructor ji";
    }
    function test(){
        echo " Hello Test ji ";
    }
   
}
$demo =new demo2();
$demo->test();
?>