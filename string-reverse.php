<?php
$var="Sanju Paswan";  
for($i=1;$i<strlen($var);$i++){
    $s.= $var[$i]; 
 } print_r($s);

for($i=strlen($var);$i>=5;$i--){
   $s.= $var[$i]; 
}
print_r($s);
?>