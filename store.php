<?php
include_once 'server.php';
include_once 'insertable/head.php';
include_once 'insertable/bodyNav.php';
include 'insertable/shoppingcart.php';

?>

<!DOCTYPE html>
<html lang="en">
  <body>
    <div style="clear:both"></div>
    <h3>Order</h3>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width = "40%">Name</th>
          <th width = "10%">Ár</th>
          <th width = "10%">Mennyiség</th>
          <th width = "20%">Összesen</th>
          <th width = "10%">Művelet</th>
        </tr>
        <?php
        if (!empty($_SESSION["shopping_car"])) {
          $total = 0;
          foreach ($_SESSION["shopping_car"] as $key => $value) {
        ?>
        <tr>
          <td><?php echo $value["i_name"];?></td>
          <td><?php echo $value["i_price"];?></td>
          <td><?php echo $value["i_qu"];?></td>
          <td><?php echo number_format($value["i_qu"] * $value["i_price"],2);?>HUF</td>
          <td><a href="insertable/shoppingcart.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
        </tr>
        <?php
        $total = $total + ($value["i_qu"] * $value["i_price"]);
        }
         ?>
         <tr>
         <td colspan="3" align="right">Összesen</td>
         <td align="right"><?php echo number_format($total, 2); ?>HUF</td>
       </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
  <div class="container">
      <p>Products</p>
      <div class="row">
      <?php
      $query = "SELECT * FROM products ORDER BY id ";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="col-md-4">
        <form method="post" action="store.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; display:!inline" align="center">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive" style="width:160px;"><br />
            <h4 class="text-info"><?php echo $row["name"]; ?></h4>
            <h4 class="text-danger"><?php echo $row["price"]; ?> FT</h4>
            <input type="text" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="h_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="h_price" value="<?php echo $row["price"]; ?>" />
            <input type="submit" name="add_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
          </div>
        </form>
      </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  </body>
</html>
