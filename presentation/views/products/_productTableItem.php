  <?php

  // CST-236
  // Author: Brydon Johnson
  // Date: 3/7/21

  // filename.php: 
  //    description 


  echo '<a href="../../handlers/products/viewProductHandler.php?id=4">';
  echo '<tr>';
  echo '<td class="prod-id">' . $products[$i]['ID'] . '</td>';
  echo '<td class="prod-name">' . $products[$i]['PRODUCT_NAME'] . '</td>';
  echo '<td class="prod-desc">' . $products[$i]['PRODUCT_DESCRIPTION'];
  echo '<a href="../../handlers/products/viewProductHandler.php?id=' . $products[$i]['ID'] . '" class="product-form-submit">View</a>';
  echo '</td>';
  echo '<td class="prod-price"> $' . $products[$i]['PRICE'] . ' </td>';
  echo '</tr>';
  echo '</a>';

  ?>
