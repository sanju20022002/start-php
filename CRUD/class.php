<?php
$data=['country'];
$gender='female';
?>
<form action="classphp.php" method="post">
<select name="country" id="" value="">
    <option value="india" <?= $data=='india'?'selected':''; ?>>India</option>
    <option value="pakistan"<?= $data=='pakistan'?'selected':''; ?>>pakistan</option>
    <option value="japan"<?= $data=='japan'?'selected':''; ?>>japan</option>
    <option value="china"<?= $data=='china'?'selected':''; ?>>china</option>
</select>
<label for="checkbox">Greeting:</label>
Hi <input type="checkbox" name="greeting[]"value="hi">
 Hello <input type="checkbox" value="hello"name="greeting[]">
Namste <input type="checkbox" value="namste"name="greeting[]">
Good Morning <input type="checkbox"name="greeting[] "value="good morning">
<label for="gender">Gender:</label>
Male :<input type="radio"name="gender" value="male"<?= $gender=='male'?'checked':'';?>>

Female :<input type="radio" name="gender"value="female"<?= $gender=='female'?'checked':'';?>>
<input type="submit" >
</form>