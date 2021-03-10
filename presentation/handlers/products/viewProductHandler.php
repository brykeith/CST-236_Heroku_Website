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

$prod_id = $product['ID'];
$prod_name = $product['PRODUCT_NAME'];
$prod_desc = $product['PRODUCT_DESCRIPTION'];
$prod_price = $product['PRICE'];

include '../../views/products/_displaySingleProduct.php';

require_once '../../views/shared/_footer.php';
