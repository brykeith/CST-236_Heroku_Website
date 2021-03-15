<a class="btn btn-outline-primary btn-sm float-end" href="../../handlers/products/viewProductHandler.php?id=<?php echo $products[$i]['ID']; ?>" class="product-form-submit">View</a>
<?

if (isset($_SESSION['role']) == true && $_SESSION['role'] == 2) {
  ?>
<a class="btn btn-outline-warning btn-sm float-end" href="../../views/admin/editProduct.php?id=<? echo $products[$i]['ID']; ?>" class="product-form-submit">Edit</a>
<a class="btn btn-outline-danger btn-sm float-end" href="../../handlers/admin/deleteProductHandler.php?id=<? echo $products[$i]['ID']; ?>" class="product-form-submit">Delete</a>
<?
}
?>