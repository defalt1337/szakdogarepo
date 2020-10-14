<?php
function isAdmin(){
  if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
    return true;
  }else {
    return false;
  }
}
function isloggedin(){
  if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user'){
    return true;
  }else{
    return false;
  }
}
?>
