<?php
echo "Current Year = ".date("Y")."<br>";
echo "Current Year = ".date("y")."<br>";
echo "Current Month = ".date("M")."<br>";
echo "Current month = ".date("m")."<br>";
echo "Current Day = ".date("D")."<br>";
echo "Current date = ".date("d")."<br>";
echo "Current hour (24hour) = ".date("H")."<br>";
echo "Current hour (12hour) = ".date("h")."<br>";
echo "Current mnt = ".date("i")."<br>";
echo "Current second = ".date("s")."<br>";
echo "Current 24hour timing = ".date("A")."<br>";
echo date_default_timezone_get()."<br>";
echo "India's Local Time Set" .date_default_timezone_set("Asia/Kolkata")."<br>";
echo "Current date = ".date("d/M/Y h:i:s A")."<br>";
echo "Current date = ".date("c")."<br>";
echo "Current date = ".date("e")."<br>";
$date=mktime(2,45,50,19,12,2002);
echo date("Y/m/d h:i:sA",$date)."<br>";
$a=strtotime("11/12/2002");
echo date("d/m/Y",$a);
?>