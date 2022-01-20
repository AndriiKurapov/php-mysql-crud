<?php
session_start();

$conn = mysqli_connect(
  '172.20.1.2:3306',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
