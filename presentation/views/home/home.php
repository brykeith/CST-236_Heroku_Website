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

$pageTitle = 'Retail Store | HomePage';

include '../../views/shared/_header.php';
?>


<div class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
    <div class="col-md-6 col-lg-8 px-0">
      <h1 class="display-2 fst-italic">Welcome!</h1>
      <h5 class="fst-italic display-6">This is the best place on the web to shop</h5>
    </div>
  </div>
</div>

<div class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h4 class="fst-normal">Check Us Out</h4>
    <p>Take a look at out awesome products</p>
    <a href="../../views/products/products.php" class="btn btn-lg btn-primary">Products</a>
  </div>
</div>


<?php
include '../../views/shared/_footer.php';
