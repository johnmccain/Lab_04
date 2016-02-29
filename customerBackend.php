<!DOCTYPE html>
<html>
  <head>
    <title>Excercise 3: Store</title>
    <!--Bootstrap CSS-->
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  	<!--jQuery-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  	<!--Bootstrap JS-->
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>Excercise 3: Store</h1>
    <br>
    <br>
    <h2><i>John's Minions Merchandise Emporium</i></h2>
    <?php
      $shippingName = array("7 Day", "Overnight", "3 Day");
      $shippingCost = array(0, 50, 5);
      $shipping = $_POST["shipping"];

      $toteQuantity = $_POST['toteQuantity'];
      $backpackQuantity = $_POST['backpackQuantity'];
      $mugQuantity = $_POST['mugQuantity'];

      $user = $_POST['user'];
      $pass = $_POST['pass'];

      $total = $toteQuantity * 14.99 + $backpackQuantity * 19.99 + $mugQuantity * 8.99 + $shippingCost[$shipping];

      echo '<div class="material_card store_card"><h3>Welcome ' . $user . '! Your password is: ' . $pass . '</h3></div>';
      echo '<div class="material_card store_card"><h4><i>Your receipt:</i></h4>';
      echo '<table class="table" id="receipt"><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>';
      echo '<tr><th>Tote</th><td>' . $toteQuantity . '</td><td>$14.99</td><td>' . $toteQuantity * 14.99 . '</td></tr>';
      echo '<tr><th>Backpack</th><td>' . $backpackQuantity . '</td><td>$19.99</td><td>' . $backpackQuantity * 19.99 . '</td></tr>';
      echo '<tr><th>Mug</th><td>' . $mugQuantity . '</td><td>$8.99</td><td>' . $mugQuantity * 8.99 . '</td></tr>';
      echo '<tr><th>Shipping</th><td colspan="2">' . $shippingName[$shipping] . '</td><td>$' . $shippingCost[$shipping] . '</td></tr>';
      echo '<tr><th colspan="3">Total Cost:</th><th>$' . $total . '</th></tr></form>';

     ?>
  </body>
</html>
