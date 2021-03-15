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

error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'];

$productBusinessService = new ProductBusinessService();

if ($productBusinessService->deleteProductWithId($id)) {
  header("Location: ../../views/products/products.php");
} else {

  //  TODO: what happens when delete is unsuccessful?
  header("Location: ../../views/products/products.php");
};
