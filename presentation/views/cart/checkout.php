<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/28/21
 * 
 * checkout.php: 
 *    description
 *    
 *    
 *    
 */

$pageTitle = 'Retail Store | Checkout';

include '../../views/shared/_header.php';

$productBusinessService = new ProductBusinessService();
$userBusinessService = new UserBusinessService();

// check that the user is logged in
if (isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];
} else {
  echo 'you are not logged in yet <br>';
  exit;
}

?>


<div class="container my-3 my-md-5">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <!-- <span class="badge badge-secondary badge-pill">3</span> -->
      </h4>

      <? include '../../views/cart/_sideCart.php';?>



      <form class="card p-2" action="../../handlers/cart/promoFormHandler.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" id="promo-code" name="promo-code" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form action="../../handlers/cart/checkoutHandler.php" class="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <!-- <input type="text" class="form-control" id="firstName" placeholder="" value="" required> -->
            <input type="text" class="form-control" id="firstName" placeholder="" value="">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <!-- <input type="text" class="form-control" id="lastName" placeholder="" value="" required> -->
            <input type="text" class="form-control" id="lastName" placeholder="" value="">
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <!-- <input type="text" class="form-control" id="username" placeholder="Username" required> -->
            <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <!-- <input type="text" class="form-control" id="address" placeholder="1234 Main St" required> -->
          <input type="text" class="form-control" id="address" placeholder="1234 Main St">
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <!-- <select class="custom-select d-block w-100" id="country" required> -->
            <select class="custom-select d-block w-100" id="country">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <!-- <select class="custom-select d-block w-100" id="state" required> -->
            <select class="custom-select d-block w-100" id="state">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <!-- <input type="text" class="form-control" id="zip" placeholder="" required> -->
            <input type="text" class="form-control" id="zip" placeholder="">
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <!-- <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required> -->
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <!-- <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required> -->
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <!-- <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required> -->
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input">
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <!-- <input type="text" class="form-control" id="cc-name" placeholder="" required> -->
            <input type="text" class="form-control" id="cc-name" placeholder="">
            <small class="text-muted">Full name as displayed on card</small>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <!-- <input type="text" class="form-control" id="cc-number" placeholder="" required> -->
            <input type="text" class="form-control" id="cc-number" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <!-- <input type="text" class="form-control" id="cc-expiration" placeholder="" required> -->
            <input type="text" class="form-control" id="cc-expiration" placeholder="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <!-- <input type="text" class="form-control" id="cc-cvv" placeholder="" required> -->
            <input type="text" class="form-control" id="cc-cvv" placeholder="">
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>


</div>




<?php
include '../../views/shared/_footer.php';

?>