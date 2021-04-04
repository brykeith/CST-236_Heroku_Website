  <?php

  // CST-236
  // Author: Brydon Johnson
  // Date: 3/7/21

  // _orderTableItem.php: 
  //    description 

  $orderID = $orders[$i]['orders_ID'];
  $orderDate = $orders[$i]['DATE'];
  $orderUserID = $orders[$i]['users_ID'];
  $productID = $orders[$i]['products_ID'];
  $quantity = $orders[$i]['QUANTITY'];
  $itemTotal = $orders[$i]['CURRENT_PRICE'];
  $totalPrice = $orders[$i]['TOTAL_PRICE'];

  ?>



  <tr>
    <td><?= $orderID ?></td>
    <td><?= $orderDate ?></td>
    <td><?= $orderUserID ?></td>
    <td><?= $productID ?></td>
    <td><?= $quantity ?></td>
    <td>$<?= $itemTotal ?></td>
    <td>$<?= $totalPrice ?></td>
  </tr>