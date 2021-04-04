<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * checkoutHandler.php: 
 *    receives POST request from login.html
 *    authenticats login data. returns either loginPasses.php or loginFailed.php
 *    
 *    
 *    
 */
require_once '../../views/shared/_header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['userid']) && isset($_SESSION['cart'])) {
  $userid = $_SESSION['userid'];
  $cart = $_SESSION['cart'];

  echo $userid;
  print_r($cart);
  echo '</br> </br>';

  $ordersBusinessService = new OrdersBusinessService();
  $order = new Order($userid, 9, $cart->getTotal_price());
  if ($ordersBusinessService->checkOut($order, $cart)) {
    $_SESSION['cart'] = new Cart($_SESSION['userid']);
    header("Location: ../../views/cart/successfulOrder.php");
  };
}
