<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sub</title>
</head>

<body>

  <nav class="navbar sticky-top navbar-light bg-light d-flex justify-content-start">
      <a class="navbar-brand mr-5" href="home.php">
          <img src="donut.jpeg" alt="" width="30px" height="30px" class="d-inline-block">
      </a>
      <ul class="navbar-nav mr-5">
          <li class="nav-item" style="display: inline !important;"><a class="nav-link" href="home.php">Back to home</a></li>
      </ul>
  </nav>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="BLTP3B8MEC2UW">
        <table>
            <tr>
                <td><input type="hidden" name="on0" value="Donut selection">Donut selection</td>
            </tr>
            <tr>
                <td><select name="os0">
            <option value="2 pieces box">2 pieces box : €10.00 EUR - weekly</option>
            <option value="4 pieces box">4 pieces box : €20.00 EUR - weekly</option>
            <option value="8 pieces box">8 pieces box : €40.00 EUR - weekly</option>
            <option value="12 pieces box">12 pieces box : €60.00 EUR - weekly</option>
            <option value="30 pieces box (party)">30 pieces box (party) : €150.00 EUR - weekly</option>
        </select> </td>
            </tr>
        </table>
        <input type="hidden" name="currency_code" value="EUR">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/hu_HU/i/scr/pixel.gif" width="1" height="1">
    </form>


</body>

</html>
