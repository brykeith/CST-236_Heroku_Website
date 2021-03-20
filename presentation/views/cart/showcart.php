<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */

$pageTitle = 'Retail Store | Show Cart';

include '../../views/shared/_header.php';

$productBusinessService = new ProductBusinessService();
$userBusinessService = new UserBusinessService();

// check that there are items in the cart
if (isset($_SESSION['cart'])) {
  $c = $_SESSION['cart'];
} else {
?>
  <p>nothing is in your cart. please go shopping</p>
<?php
  exit;
}

// check that the user is logged in
if (isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];
} else {
  echo 'you are not logged in yet <br>';
  exit;
}

// check if this cart belongs to this user
if ($c->getUserid() != $userid) {
  echo 'It appeart that this is not your cart. sorry.';
  exit;
}

?>



<div class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
    <div class="col-md-6 col-lg-8 px-0">
      <h1 class="display-4 fst-italic">Welcome to Your Cart!</h1>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $index = 1;
      foreach ($c->getItems() as $product_id => $qty) {
        $product = $productBusinessService->getProductByID($product_id);
        include '../../views/cart/cartTableItem.php';
        $index++;
      }

      ?>

      <!-- print total -->
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th scope="col">Total:</th>
        <td><?= $c->getTotal_price() ?></td>
      </tr>

    </tbody>
  </table>
</div>







<?php
include '../../views/shared/_footer.php';

?>