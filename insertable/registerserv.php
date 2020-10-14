<?php
if (isset($_POST['reg_user'])) {
  register();
}
//user reg-->
function register(){

global $db,$errors,$username,$mail;

//define strings


    $username = mysqli_real_escape_string($db, $_POST['username']);
    $mail = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//chechking empty entries

    if(empty($username)) {array_push ($errors, "Username is rquired");}
    if(empty($mail)){array_push($errors, "Mail is required");}
    if(empty($password_1)){array_push($errors, "Password is required");}
    if($password_1 != $password_2){
        array_push($errors, "Passwords doesn't match!");
    }

//Register users if the creds are correct and doesn't exists

    //encrypting and putting creds into to db
    if(count($errors) == 0){
        $password = md5($password_1);

        if (isset($_POST['user_type'])) {
          $user_type = e($_POST['user_type']);
          $query = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$mail', '$password', $user_type)";
          mysqli_query($db,$query);
          $_SESSION['username'] = $username;
          header('location: login.php');
        }else {
          $query = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$mail', '$password', 'user')";
          mysqli_query($db,$query);
          $logged_in_user_id = mysqli_insert_id($db);
          $_SESSION['user'] = getUserById($logged_in_user_id);
          $_SESSION['success'] = "Logged in as guest! ";
          header('location: login.php');
        }
    }
    $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email = '$mail' LIMIT 1";
    $result_1 = mysqli_query($db,$user_check_query);
    $user_1 = mysqli_fetch_assoc($result_1);
    if($user_1){
        if($user_1['username'] === $username){
            array_push($errors, "Username already exists");
        }
        if($user_1['email'] === $mail){
        array_push($errors, "Mail already exists");
      }
    }
}
function getUserById(){
  global $db;
  $query = "SELECT * FROM users WHERE id=" .$id;
  $result = mysqli_query($db,$query);
  $user = mysqli_fetch_assoc($result);
  return $user;
}

?>
