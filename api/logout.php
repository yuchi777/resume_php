<?php
include_once "../base.php";
// $a = $_SESSION;
unset($_SESSION['admin']);
// print_r($_SESSION);
to('../index.php?do=login');
?>