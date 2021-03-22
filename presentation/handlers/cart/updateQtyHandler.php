<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * loginHandler.php: 
 *    receives POST request from login.html
 *    authenticats login data. returns either loginPasses.php or loginFailed.php
 *    
 *    
 *    
 */
require_once '../../views/shared/_header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$prod_id = $_GET['id'];
$new_qty = $_POST['new-qty'];

if (isset($_SESSION['cart'])) {
  $c = $_SESSION['cart'];
} else {
  if (isset($_SESSION['userid'])) {
    $c = new Cart($_SESSION['userid']);
  } else {
    echo "please login first <br>";
    exit;
  }
}

$c->setQty($prod_id, $new_qty);
$_SESSION['cart'] = $c;

print_r($_SESSION['cart']);
header("Location: ../../views/cart/showcart.php");
