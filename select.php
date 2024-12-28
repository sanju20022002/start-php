<?php
echo "<pre>";
print_r($_POST);
// print_r($_POST['color']); 
?>
<form action="" method="post">
  <div style=" height:400px;width:200px;border:5px double;background:<?= $_POST['color']?>">
  
  <select name="country" id="">
    <option value="">--select--</option>
    <option value="india">India</option>
    <option value="america">America</option>
    <option value="nepal">Nepal</option>
    <option value="china">China</option>
  </select>
 
    <label for=" gender" value="">Gender</label>
    <input type="radio"value="Male" name="gender"> Male  
    <input type="radio" value="Female" name="gender"> Female
    <input type="radio" value="Other" name="gender"> Other 
 
  <label for=" ">Date</label>
  <input type="date">
  <label for=" ">Range</label>
  <input type="range"value=2>
  <label for=" ">Color</label>
  <input type="color"value="red" name="color">
 
  </div>
  <input type="submit">
</form>