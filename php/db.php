<?php
session_start();
$conn = mysqli_connect(
  'tf-database.c4exrmbfakp6.eu-central-1.rds.amazonaws.com',
  'admin',
  'password123',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));
?>