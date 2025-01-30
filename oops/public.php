<?php
class Test {
    public $name="Sanju <br/>";
    public $hobby="Listening song <br/>";
    public function demo(){
        // echo $this->name."<br/>";
        return "Public methode and property";
    }
}
$test= new Test;
echo $test->name,$test->hobby;
echo $test->demo(); 

// class child extends Test{
//     public function test(){
//         echo $this->name;
//     }
// }
// $child =new Child;
// echo $child ->name;
// echo $child ->demo();
?>