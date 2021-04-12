<ul class="list-group mb-3">

  <?php
  // check that there are items in the cart
  if (isset($_SESSION['cart'])) {
    $c = $_SESSION['cart'];
  } else {
  ?>
    <p>nothing is in your cart. please go shopping</p>
  <?php
    exit;
  }

  foreach ($c->getItems() as $product_id => $qty) {
    $product = $productBusinessService->getProductByID($product_id);
  ?>
    <li class="list-group-item d-flex justify-content-between lh-condensed">
      <div>
        <h6 class="my-0"><?= $product->getName() ?></h6>
        <small class="text-muted"><?= $product->getDesc() ?></small>
      </div>
      <span class="text-muted"><?= ($product->getPrice() * $qty) ?></span>
    </li>




  <?php
  }
  ?>

  <li class="list-group-item d-flex justify-content-between">
    <span>Sub - Total (USD)</span>
    <strong><?= $c->getTotal_price() ?></strong>
  </li>
  <?php

  // check if promo is applied
  if (isset($_SESSION['promo'])) {
    $promo = $_SESSION['promo'];
  ?>

    <li class="list-group-item d-flex justify-content-between bg-light">
      <div class="text-success">
        <h6 class="my-0">Promo code</h6>
        <small><?= $promo['CODE'] ?></small>
      </div>
      <span class="text-success">-$<?= $c->getTotal_price() * (($promo['DISCOUNT']) / 100) ?> (-<?= $promo['DISCOUNT'] ?>%)</span>
    </li>
  <?php
  }
  ?>


  <li class="list-group-item d-flex justify-content-between">
    <span>Total (USD)</span>
    <strong><?= $c->getTotal_price() - ($c->getTotal_price() * (($promo['DISCOUNT']) / 100)) ?></strong>
  </li>


</ul>