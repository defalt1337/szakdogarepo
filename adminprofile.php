<?php
include_once 'insertable/head.php';
include 'insertable/adminfunction.php';

if (!isAdmin()) {
  $_SESSION['msg'] = "Login first";
  header('location: login.php');
}
 ?>
</head>
<body>
  <?php include 'insertable/bodyNav.php'; ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>User type</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once ('server.php');
      $query = $db->query("SELECT * FROM users ORDER by user_type");
      while ($row = $query->fetch_array()) {
        echo "<tr>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['user_type']."</td>";
        echo "<tr>";
      }

      ?>
    </tbody>
  </table>
  <form action="insertable/deleteuser.php" method="post">
    Username: <input type="text" name="username_delete" placeholder="username">
    <input type="submit" name="btn_delete" value="Delete User" />
  </form>
  <form action="insertable/updateuser_type.php" method="post">User type change:
  <select name="userid" id="dropdown">
    <?php
    $query = $db->query("SELECT * FROM users ORDER by user_type");
    while($row = $query->fetch_array()){
      echo "<option value = '" .$row['id']. "'>" .$row['username']. "</option>";
    }
    ?>
  </select>
  <select name="usert" id="dropdown">
    <?php
    $query = $db->query("SELECT user_type FROM users GROUP BY user_type ORDER by user_type");
    while($row = $query->fetch_array()){
      echo "<option value = '" .$row['user_type']. "'>" .$row['user_type']. "</option>";
    }
    ?>
  </select>
  <input type="submit" name="btn_update" value="Update user type"/>
  </form>
</body>
