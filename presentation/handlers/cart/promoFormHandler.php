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



$ordersBusinessService = new OrdersBusinessService();
$code = $_POST['promo-code'];

$ordersBusinessService->applyPromoCode($code);

header("Location: ../../views/cart/checkout.php");
