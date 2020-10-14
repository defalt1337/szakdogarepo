<?php
include 'adminfunction.php';
//login user
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($username)){
        array_push($errors, "Username required");
    }
    if(empty($password)){
        array_push($errors, "Password required");
    }
    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $results = mysqli_query($db,$query);
        if(mysqli_num_rows($results) == 1){
          $_SESSION['username'] = $username;
          header('location: home.php');
          $logged_in_user = mysqli_fetch_assoc($results);
          if ($logged_in_user['user_type'] == 'admin') {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "You are logged in as admin!";
            header('location:adminprofile.php');
          }else {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "You are logged in as user!";
            header('location:home.php');
          }
    }else {
      array_push($errors,"Wrong username or pss!");
    }
  }
}
 ?>
