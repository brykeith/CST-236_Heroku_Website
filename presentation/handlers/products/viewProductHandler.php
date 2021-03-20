<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../views/shared/_header.php';


$prod_id = $_GET['id'];
$service = new ProductBusinessService();
$product = $service->getProductByID($prod_id);

$prod_id = $product->getId();
$prod_name = $product->getName();
$prod_desc = $product->getDesc();
$prod_price = $product->getPrice();

include '../../views/products/_displaySingleProduct.php';

require_once '../../views/shared/_footer.php';
