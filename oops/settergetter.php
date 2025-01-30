<?php
class Test{
    public $name;
    public function demo(){
        echo $this->name;//property getter
        echo "Hello demo";
    }
}
$test= new Test;
$test->name="Sanju";//property setter
$test->demo();
?>