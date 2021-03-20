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
?>

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<div class="container my-5">
  <table id="products" class="table table-light table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th class="column-price">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php

      for ($i = 0; $i < count($products); $i++) {
        include '../../views/products/_productTableItem.php';
      }

      ?>

    </tbody>
  </table>
</div>

<script>
  $(document).ready(function() {
    $('#products').DataTable();
  });
</script>