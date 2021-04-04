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

$id = $_POST['ProductID'];
$name = $_POST['ProductName'];
$desc = $_POST['ProductDescription'];
$price = $_POST['ProductPrice'];

$productBusinessService = new ProductBusinessService();

if ($productBusinessService->editProduct($id, $name, $desc, $price)) {
  header("Location: ../../handlers/products/viewProductHandler.php?id=$id");
} else {

  //  TODO: what happens when edit is unsuccessful?
  header("Location: ../../handlers/products/viewProductHandler.php?id=$id");
};
