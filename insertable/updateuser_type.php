<?php
include_once ('../server.php');
include_once ('../adminprofile.php');
$usert = $_POST['usert'];
$userid = $_POST['userid'];
if (isset($_POST['btn_update'])) {
  $adatb = mysqli_query($db,"UPDATE users SET user_type = '$usert' WHERE id = '$userid'");
  if ($adatb) {
    echo "updated";
    header('refresh:1; url= ../adminprofile.php');
  }
}
//("UPDATE users SET user_type = '$usert' WHERE id = '$userid'");
?>
