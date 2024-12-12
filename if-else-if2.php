<?php
$a=10;
if($a++==10 && ++$a != 12){
    echo "Gayab";
}
else if(--$a + ++$a ==24){
    echo "Aa gye";
}
else if($a- $a++ + --$a ==25){
    echo "Bkk";
}
else{
    echo "Nothing";
    echo $a;
}
?>