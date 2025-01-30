<?php
class Demo{
    const Test="Hello Constant";
}
// $demo =new Demo; //isme bina instanse bnaye bhi run hota h
echo Demo::Test; //::scope resolution operator
?>