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
  <style>
    html {
      width: 100%;
      height: 100%;
    }

    body {
      width: 100%;
      height: 100%;
    }

    .prod-outer-wrapper {
      height: 80%;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .prod-inner-wrapper {
      padding: 30px;
      box-shadow: rgba(100, 100, 111, 0.4) 0px 7px 29px 0px;
      position: relative;
    }

    .prod-inner-wrapper::before {
      position: absolute;
      content: '';
      background-color: #282e34;
      top: 0;
      left: 0;
      height: 100%;
      width: 155px;
      z-index: -100;
    }

    .table-row-header {
      color: #fff;
      text-align: right;
    }

    .table-row-data {
      padding-left: 20px;
    }
  </style>
</head>

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