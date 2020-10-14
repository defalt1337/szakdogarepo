<?php
session_start();
if (isset($_POST["add_cart"])) {
  if (isset($_SESSION["shopping_car"])) {
    $item_array_id = array_column($_SESSION["shopping_car"], "item_id");
    if (!in_array($_GET["id"],$item_array_id)) {
      $count = count($_SESSION["shopping_car"]);
      $item_array = array('item_id' => $_GET["id"], 'i_name' => $_POST["h_name"], 'i_price' => $_POST["h_price"], 'i_qu' => $_POST["quantity"] );
      $_SESSION["shopping_car"][$count] = $item_array;
    }else {
      echo '<script>alert("Item added already")</script>';
      //echo '<script>window.location="../store.php"</script>';
      header('location: ../store.php');
    }
  }else {
    $item_array = array('item_id' => $_GET["id"], 'i_name' => $_POST["h_name"], 'i_price' => $_POST["h_price"], 'i_qu' => $_POST["quantity"] );
    $_SESSION["shopping_car"][0] = $item_array;
  }
}
if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["shopping_car"] as $key => $value) {
      if ($value["item_id"] == $_GET["id"]) {
        unset($_SESSION["shopping_car"][$key]);
        echo '<script>alert("item removed")</script>';
        //echo '<script>window.location = "store.php"</script>';
        header('location: ../store.php');
      }
    }
  }
}
//session_destroy();
?>
