<?php
class Test{
    protected $name="Sanju <br>";
    protected function demo(){
        echo "This is protected property<br>";
    } 
    public function all(){
        echo $this->name;
        echo $this->demo();
    }
}
$test=new Test;
echo $test->all();

class child extends Test{
    function hello(){
        echo "Hii <br>";
        echo $this->demo();
    }
}
$sanju=new Child;
echo $sanju->hello();
?>