<?php
include_once ('../server.php');
$username = $_POST['username_delete'];
if (isset($_POST['btn_delete'])) {
  $jozsi = mysqli_query($db,"DELETE FROM users WHERE username = '$username'");
  if ($jozsi) {
    echo "Deleted";
    header ('refresh:1 ; url=../home.php');
  }//else {
    //head ('refresh:5 ; url = home.php');
  //}
}
?>
