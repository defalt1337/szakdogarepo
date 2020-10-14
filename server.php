<?php
session_start();
$username = "";
$password = "";
$mail = "";
$errors = array();
//database connect
$db = mysqli_connect('localhost', 'root', 'root', 'szakdolgozat');
if (!$db) {
  echo "connection error";
}
?>
