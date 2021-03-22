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

require_once '../../../utility/userRestricted.php';
?>

<div class="prod-outer-wrapper">
  <div class="prod-inner-wrapper">
    <table>
      <tr>
        <td>
          <div class="table-row-header">ID:</div>
        </td>
        <td>
          <div class="table-row-data prod-id"><?php echo $prod_id; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="table-row-header">NAME:</div>
        </td>
        <td>
          <div class="table-row-data prod-name"><?php echo $prod_name; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="table-row-header">DESCRIPTION:</div>
        </td>
        <td>
          <div class="table-row-data prod-desc"><?php echo $prod_desc; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="table-row-header">PRICE:</div>
        </td>
        <td>
          <div class="table-row-data prod-price"><?php echo $prod_price; ?></div>
        </td>
      </tr>




    </table>
    <a class="btn btn-outline-primary btn-sm" href="../../handlers/cart/addToCartHandler.php?id=<?php echo $prod_id; ?>" class="product-form-submit">ADD TO CART</a>


  </div>
</div>