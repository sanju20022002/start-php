<?php
echo "<pre>";
// print_r($_POST); it is hold the value of post method
echo "My name is ".$_POST['name']."<br>";
echo "My mother's name is ".$_POST['mname']."<br>";
echo "My father's name is".$_POST['fname']."<br>";
echo "My father's name is".$_POST['table']."<br>";
echo "My email is ".$_POST['email']."<br>";
?>
<div class="table" style="height:200px;width:200px;background:red">
    <?php
for($i=1;$i<=10;$i++){
    echo $_POST['table']*$i."<br>";} ;
    ?>
</div>
<form action="" method="post">
<label for="Name">Name</label>
<input type="text" name="name">
<label for="">Mname</label>
<input type="text" name="mname">
<label for="">Fname</label>
<input type="text" name="fname">
<label for="">Table</label>
<input type="text" name="table">
<label for="Email">Email</label>
<input type="email" name="email"><br>
<input type="submit" name="btn">
</form>

