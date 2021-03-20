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

$pageTitle = 'Retail Store | Edit Product';

include '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';

$prod_id = $_GET['id'];
$service = new ProductBusinessService();
$product = $service->getProductByID($prod_id);

$prod_id = $product->getId();
$prod_name = $product->getName();
$prod_desc = $product->getDesc();
$prod_price = $product->getPrice();

?>
<div class="container-fluid pt-4 d-flex justify-content-center">
  <form style="width: 24rem" class="card px-4 py-3" action="../../handlers/admin/editProductHandler.php?id=<?= $prod_id ?>" method="POST">
    <div class="mb-3">
      <label for="ProductID" class="form-label">ID: <?= $prod_id ?></label>
      <input type="hidden" class="form-control" id="ProductID" name="ProductID" value="<?= $prod_id  ?>" />
    </div>
    <div class="mb-3">
      <label for="ProductName" class="form-label">Product Name: </label>
      <input type="text" class="form-control" id="ProductName" name="ProductName" value="<?= $prod_name ?>" />
    </div>
    <div class="mb-3">
      <label for="ProductDescription" class="form-label">Product description: </label>
      <input type="text" class="form-control" id="ProductDescription" name="ProductDescription" value="<?= $prod_desc ?>" />
    </div>
    <div class="mb-3">
      <label for="ProductPrice" class="form-label">Product Price: </label>
      <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" value="<?= $prod_price ?>" />
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?
include '../../views/shared/_footer.php';