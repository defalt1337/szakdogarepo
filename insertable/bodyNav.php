<nav class="navbar sticky-top navbar-light bg-light d-flex justify-content-start">
    <a class="navbar-brand mr-5" href="home.php">
        <img src="donut.jpeg" alt="" width="30px" height="30px" class="d-inline-block">
    </a>
    <ul class="navbar-nav mr-5">
        <li class="nav-item" style="display: inline !important;">
          <?php
          if (!isset($_SESSION['username'])){
            echo '<a class="nav-link" href="login.php">Login</a>';
          }else{
            echo '<a href="index.php?logout=1" style="color: grey;"> Logout</a>';
          }
           ?>
        </li>
    </ul>
    <ul class="navbar-nav mr-5">
        <?php
        if (!isset($_SESSION['username'])) {
           echo '<li class="nav-item" style="display: inline !important;"><a class="nav-link" href="register.php">Register</a></li>';
        }else {
          echo '<li class="nav-item" style="display: inline !important;"><a class="nav-link" href="store.php">Order</a></li>';
        }
         ?>
    </ul>
    <ul class="navbar-nav mr-5">
        <?php if (isset($_SESSION['username'])) {
          echo '<li class="nav-item" style="display: inline !important;"><a class="nav-link" href="sub.php">Sub</a></li>';
        }
        ?>
    </ul>
    <ul class="navbar-nav mr-5">
        <?php if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin'){
          echo '<li class="nav-item" style="display: inline !important;"><a class="nav-link" href="adminprofile.php">AdminPortal</a></li>';
        } ?>
    </ul>
    <ul class="navbar-nav mr-5">
    <li>
        <div class="container-fluid">
        <?php if(isset($_SESSION['success'])) : ?>
        <div class="active error success">
        <a>
                <?php echo $_SESSION['success'];
                unset($_SESSION['success'])
                ?>
        </a>
        </div>
        <?php endif ?>
        <?php
        if(isset($_SESSION['username'])) :
        ?>
        <a style="color:red;"><?php echo $_SESSION['username'] ?></a>
        <?php endif ?>
    </div>
    </li>
    </ul>
</nav>
