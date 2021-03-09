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

error_reporting(E_ALL);
ini_set('display_errors', 1);

// create an instance of the business service
$bs = new ProductBusinessService();

// the find method returns an array of products
$products = $bs->getAllProducts();

if ($products) {
  // we got some results
  include '../../views/products/_displayProductSearchResults.php';
} else {
  echo 'no results found';
}
