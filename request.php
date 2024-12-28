<?php
//It contains information of submitted
//form data and all cookies
// print_r ($_SERVER['REQUEST_METHOD']);
print_r ($_REQUEST);
?>
<form action="secondRequest.php" method="post">
<!-- <form action="<?php //echo $_SERVER['PHP_SELF'] ?>" method="post"> -->
    <!-- aise bhi likh skte h ye sort hand echon krta h keval ak value ko -->
<!-- <form action="<?//= $_SERVER['PHP_SELF'] ?>"> -->
<lable for="first">Name  </lable>
<input type="text"name="name">
<lable for="first">Email </lable>
<input type="text"name="email">
<input type="submit">
</form> 