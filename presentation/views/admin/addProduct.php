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

$pageTitle = 'Retail Store | Add Product';

include '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';

?>
<div class="container-fluid pt-4 d-flex justify-content-center">
  <form style="width: 24rem" class="card px-4 py-3" action="../../handlers/admin/addProductHandler.php" method="POST">
    <div class="mb-3">
      <label for="ProductName" class="form-label">Product Name: </label>
      <input type="text" class="form-control" id="ProductName" name="ProductName" />
    </div>
    <div class="mb-3">
      <label for="ProductDescription" class="form-label">Product description: </label>
      <input type="text" class="form-control" id="ProductDescription" name="ProductDescription" />
    </div>
    <div class="mb-3">
      <label for="ProductPrice" class="form-label">Product Price: </label>
      <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" />
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?
include '../../views/shared/_footer.php';