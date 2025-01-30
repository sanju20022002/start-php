<?php
class Demo{
    const Test=" Hello Constant";
    function test(){
        echo Demo::Test;
        echo self::Test; //it is use only inside of class 
    }
}
$demo =new Demo;
echo Demo::Test; //::scope resolution operator
$demo->test();
?>