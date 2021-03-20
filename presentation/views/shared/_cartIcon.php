<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/19/2021
 * 
 * _cartIcon.php: 
 *    displays cart in header when user is logged in  
 */

?>


<li class="nav-item px-0 px-lg-4 py-3 py-lg-0  d-flex align-items-center">
  <a href="../../views/cart/showcart.php" class="cart-button">
    <img class="cart-icon" src="../../../resources/images/shopping-cart-solid.svg" class="mx-4" width="32" height="32">

    <!--   if: cart is set and has items, show red notification    -->
    <?php if (isset($_SESSION['cart']) && (count($_SESSION['cart']->getItems()) > 0)) { ?>
      <div class="cart-button__items"> <?= count($_SESSION['cart']->getItems()) ?></div>
    <?php } ?>
  </a>
</li>