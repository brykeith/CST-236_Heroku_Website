<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * filename: 
 *    description    
 *    
 */

$pageTitle = 'Retail Store | Products';

include '../../views/shared/_header.php';
require_once '../../../utility/userRestricted.php';
include '../../handlers/products/displayAllProductsHandler.php';
include '../../views/shared/_footer.php';
