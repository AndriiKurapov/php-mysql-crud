<?php
session_start();

$conn = mysqli_connect(
  'database-1.c4exrmbfakp6.eu-central-1.rds.amazonaws.com',
  'admin',
  'Password1234',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
