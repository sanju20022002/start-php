<?php
class Base{
    function demo(){
        echo "I am Base class";
    }
}class Child extends Base{
    function demo1(){
        echo "I am first class child";
    }
}
$child =new Child;
$child->demo();
$child->demo1();
?>