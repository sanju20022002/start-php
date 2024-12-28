<form action="val3field.php" method="post">
    Name: <input type="text" name="name">
    <small style="color:red"> <?= isset($_GET['nameerror'])? $_GET['nameerror']:'' ?></small>
    Email: <input type="text" name="email">
    <small style="color:red"> <?= isset($_GET['emailerror'])? $_GET['emailerror']:'' ?></small>
    Number: <input type="text" name="number">
    <small style="color:red"> <?= isset($_GET['numbererror'])? $_GET['numbererror']:'' ?></small>
    <input type="submit" value="validation"name="validate">
</form>