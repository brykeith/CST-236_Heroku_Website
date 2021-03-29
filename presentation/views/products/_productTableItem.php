  <?php

  // CST-236
  // Author: Brydon Johnson
  // Date: 3/7/21

  // filename.php: 
  //    description 

  ?>

  <tr>
    <td class="prod-id"><?php echo $products[$i]['ID']; ?></td>
    <td class="prod-name"> <?php echo $products[$i]['PRODUCT_NAME']; ?></td>
    <td class="prod-desc"> <?php echo $products[$i]['PRODUCT_DESCRIPTION']; ?></td>
    <td>
      <? include '../../views/products/_productTableItem__buttons.php'; ?>
    </td>
    <td class="prod-price">$<?php echo $products[$i]['PRICE']; ?></td>
  </tr>