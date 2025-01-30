<?php
class Test{
    public $name;
    public function demo($name1){
        $this->name=$name1;//property getter
        echo "Hello demo";
    }
    public function hello(){
        echo $this->name;
    }
}
$test= new Test;
$test->demo("Hiiiii...");
echo $test->name;//property setter
$test->hello();
?>