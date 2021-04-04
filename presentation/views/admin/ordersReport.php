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

$pageTitle = 'Retail Store | Orders Report';

include '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';

$date1 = $_GET['date1'];
$date2 = $_GET['date2'];


?>

<form action="../../views/admin/ordersReport.php" method="GET">
  from:
  <input type="date" id="date1" name="date1" <? if($date1): ?> value="<?= $date1 ?>"
  <?endif;?>>
  to:
  <input type="date" id="date2" name="date2" <? if($date2): ?> value="<?= $date2 ?>"
  <?endif;?>>

  <input type="submit" value="submit">
</form>






<?php

if ($date1 && $date2) {

  // returns $orders
  include '../../handlers/admin/ordersReportHandler.php';
?>

  <div class="container">
    <table id="users" class="table table-light table-hover">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Date</th>
          <th>User ID</th>
          <th>Product ID</th>
          <th>Quantity</th>
          <th>Item Total</th>
          <th>Order Total</th>
        </tr>
      </thead>
      <tbody>
        <?php

        for ($i = 0; $i < count($orders); $i++) {
          include '../../views/admin/_orderTableItem.php';
        }

        ?>

      </tbody>
    </table>
  </div>
<?php
}
