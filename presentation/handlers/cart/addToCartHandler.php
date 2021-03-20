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

echo '1 <br>';
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";


$prod_id = $_GET['id'];
echo '2 <br>';

echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";



if (isset($_SESSION['cart'])) {
  $c = $_SESSION['cart'];
  echo '3 <br>';

  echo "<pre>";
  print_r($_SESSION['cart']);
  echo "</pre>";
} else {
  echo '4 <br>';

  echo "<pre>";
  print_r($_SESSION['cart']);
  echo "</pre>";


  if (isset($_SESSION['userid'])) {
    echo '5 <br>';

    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";



    $c = new Cart($_SESSION['userid']);
    echo '6 <br>';

    echo '7 <br>';
  } else {
    echo '8 <br>';
    echo "please login first <br>";
    exit;
  }
}
echo '9 <br>';

$c->addItem($prod_id);
$_SESSION['cart'] = $c;
echo '10 <br>';

echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";
