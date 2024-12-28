<form action="classphp.php" method="post">
<select name="country" id="" value="">
    <option value="">--select--</option>
    <option value="pakistan">pakistan</option>
    <option value="japan">japan</option>
    <option value="china">china</option>
</select>
<label for="checkbox">Greeting:</label>
Hi <input type="checkbox" name="greeting[]"value="hi">
 Hello <input type="checkbox" value="hello"name="greeting[]">
Namste <input type="checkbox" value="namste"name="greeting[]">
Good Morning <input type="checkbox"name="greeting[] "value="good morning">
<input type="submit" >
</form>