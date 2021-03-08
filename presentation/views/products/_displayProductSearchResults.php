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
  <style>
    #products {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #products td,
    #products th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #products tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #products tr:hover {
      background-color: #ddd;
    }

    #products th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<table id="products" class="display">
  <thead>
    <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php

    for ($i = 0; $i < count($products); $i++) {
      echo '<tr>';
      echo '<td>' . $products[$i]['ID'] . '</td>';
      echo '<td>' . $products[$i]['PRODUCT_NAME'] . '</td>';
      echo '<td>' . $products[$i]['PRODUCT_DESCRIPTION'] . '</td>';
      echo '<td>' . $products[$i]['PRICE'] . '</td>';
      echo '</tr>';
    }

    ?>



  </tbody>
</table>

<script>
  $(document).ready(function() {
    $('#products').DataTable();
  });
</script>