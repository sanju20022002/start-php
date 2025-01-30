<?php
class Base{
    function demo(){
        echo "This is the base class<br/>";
    }
    function hello(){
        echo "This is the hello class<br/>";
    }
}
//new Base;
class Derived extends Base{
    function __construct()
    {
     echo "This is the derived class<br/>";  
    }
}
$derived =new Derived;
$derived->demo();
$derived->hello();
?>