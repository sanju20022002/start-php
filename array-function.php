<?php
//array_push
$arr=["sanju",123,"Paswan",23.23];
print_r (array_push($arr,"Anju"));
array_push($arr,[1,3,4,5]);
echo "<pre>";
print_r($arr)."<br><br>";
//array_pop
$arr1=["sanju",123,"Paswan",23.23,"Pop-Method","Anjali"];
print_r (array_pop($arr1));
echo "<pre>";
print_r($arr1);

//array_unshift
$arr2=["Sakku","Sahiba","hania","Roha","Mahi"];
array_unshift($arr2,"Unshift Sanju");
print_r($arr2);

//array_shift
$arr3=["Sakku Shift","Sahiba","hania","Roha","Mahi"];
array_shift($arr3);
print_r($arr3);
?>