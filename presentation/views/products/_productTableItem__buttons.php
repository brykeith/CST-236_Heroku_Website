<div class="d-flex flex-row align-items-center justify-content-center">
  <a class="btn btn-primary btn-sm me-2" href="../../handlers/products/viewProductHandler.php?id=<?php echo $products[$i]['ID']; ?>" class="product-form-submit">View</a>

  <?php
  if (isset($_SESSION['role']) == true && $_SESSION['role'] == 2) {
  ?>
    <a class="btn btn-warning btn-sm  me-2" href="../../views/admin/editProduct.php?id=<? echo $products[$i]['ID']; ?>" class="product-form-submit">Edit</a>
    <a class="btn btn-danger btn-sm  me-2" href="../../handlers/admin/deleteProductHandler.php?id=<? echo $products[$i]['ID']; ?>" class="product-form-submit">Delete</a>
  <?php
  }
  ?>
</div>