<?php
session_start();
print_r($_SESSION);
// session_destroy();//detele the session
// session_unset();// remove the session
unset($_SESSION['oye']);
?>