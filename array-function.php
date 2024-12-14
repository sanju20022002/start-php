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
print_r($arr1);

//array_unshift
$arr2=["Sakku","Sahiba","hania","Roha","Mahi"];
array_unshift($arr2,"Unshift Sanju");
print_r($arr2);

//array_shift
$arr3=["Sakku Shift","Sahiba","hania","Roha","Mahi"];
array_shift($arr3);
print_r($arr3);

//Array_merge
$array1=[1,2,3,4,5,6];
$array2=[7,8,9,0,];
$mer=array_merge($array1,$array2);
print_r($mer);

// compact it return an assosiative array
$a=1;
$b=2;
$c="Sanju";
print_r(compact('a','b','c'));

// shorting by default ascending order
$short=[4,9,7,6,8,2,3,1];
sort($short);
print_r($short);

// descending order
$short1=[4,9,7,6,8,2,3,1];
rsort($short1);
print_r($short1);

// range
print_r(range('a','s'));
print_r(range('A','z'));


// combind it convert the arrays in pair of key and values first arry is convert into key and second convert into value
$ar1=(range(1,5));
$ar2=["Sanju","anju","Sandhya","anchal","Kavya"];
$com=array_combine($ar1,$ar2);
print_r($com);
echo "</pre>";

// array_search it return index or key of the value
$animal=["Dog","Cat","Elephant","Zebra","Cow"];
print_r(array_search("Cat",$animal));
?>