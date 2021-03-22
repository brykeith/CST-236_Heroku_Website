<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */
?>

<tr>
  <th scope="col"><?= $index ?></th>
  <td><?= $product->getName() ?></td>
  <td><?= $product->getDesc() ?></td>
  <td><?= $product->getPrice() ?></td>
  <td width="200">
    <form action="../../handlers/cart/updateQtyHandler.php?id=<?= $product_id ?>" method="POST">
      <div class="d-flex">
        <p class=" fw-bold me-2"><?= $qty ?></p>
        <input class="form-control me-2" type="number" min="0" max="1000" name="new-qty" id="new-qty" value="<?= $qty ?>">
        <input class=" btn btn-sm btn-warning me-2" type="submit" value="update">
      </div>
    </form>
  </td>
  <td><?= $c->getSubtotals()[$product->getId()] ?></td>
</tr>