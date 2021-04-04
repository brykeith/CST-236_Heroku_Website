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

require_once '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$prod_name = $_POST['ProductName'];
$prod_desc = $_POST['ProductDescription'];
$prod_price = $_POST['ProductPrice'];

$productBusinessService = new ProductBusinessService();

if ($productBusinessService->addProduct($prod_name, $prod_desc, $prod_price)) {
  header("Location: ../../views/products/products.php");
} else {

  //  TODO: what happens when add is unsuccessful?
  header("Location: ../../views/products/products.php");
};
