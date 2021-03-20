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
<!-- <tr>
  <th scope="col">#</th>
  <th scope="col">Product</th>
  <th scope="col">Description</th>
  <th scope="col">Price</th>
  <th scope="col">Quantity</th>
  <th scope="col">Subtotal</th>
  <th scope="col"></th>
</tr> -->

<tr>
  <th scope="col"><?= $index ?></th>
  <td><?= $product->getName() ?></td>
  <td><?= $product->getDesc() ?></td>
  <td><?= $product->getPrice() ?></td>
  <td><?= $qty ?></td>
  <td><?= $c->getSubtotals()[$product->getId()] ?></td>
</tr>