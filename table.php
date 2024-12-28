<form action="" method="post">
<input type="text" name="table">
<input type="submit">
</form>
<table border="1">
    <tr>
    <th>
        Table
    </th>
    </tr>
    <?php

$num=$_POST['table'];
for($i=1;$i<=10;$i++){
    echo "<tr>
    <td>".
    $num*$i.
     "</td>
    </tr>";

}
    ?>
</table>