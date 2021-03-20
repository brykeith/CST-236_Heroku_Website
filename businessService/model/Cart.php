<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * Cart.php: 
 *    description
 *    
 *    
 *    
 */


class Cart
{
  private $userid;
  private $items;
  private $subtotals;
  private $total_price;



  public function __construct($userid)
  {
    $this->userid = $userid;
    $this->items =  array();
    $this->subtotals =  array();
    $this->total_price = 0;
  }

  // * add a new item to the cart
  public function addItem($prod_id)
  {
    // if the item already exists
    if (array_key_exists($prod_id, $this->items)) {
      $this->items[$prod_id] += 1;
    } else {
      $this->items = $this->items + array($prod_id => 1);
    }

    $this->calcTotal();
  }

  // * SET the quantity for the specified item in the cart
  public function setQty($prod_id, $newQty)
  {
    // if the item already exists
    if (array_key_exists($prod_id, $this->items)) {
      $this->items[$prod_id] = $newQty;
    } else {
      $this->items = $this->items + array($prod_id => $newQty);
    }

    if ($this->items[$prod_id] <= 0) {
      unset($this->items[$prod_id]);
    }
  }

  // * Calculate the total of all the items in the cart
  public function calcTotal()
  {

    $productBusinessService = new ProductBusinessService();

    // create an array to hold all subtotals
    $subtotals_array = array();
    $this->total_price = 0;

    foreach ($this->items as $item => $qty) {

      // get the price of the product from the database
      $product = $productBusinessService->getProductByID($item);

      // calculate the total (price * quantity)
      $product_subtotal = $product->getPrice() * $qty;

      // add that subtotal to the subtotal array
      $subtotals_array = $subtotals_array + array($item => $product_subtotal);

      // add the item subtotal to the cart total
      $this->total_price += $product_subtotal;
    }

    // set the subtotals array
    $this->subtotals = $subtotals_array;
  }


  // GET userid
  public function getUserid()
  {
    return $this->userid;
  }

  // SET userid
  public function setUserid($userid)
  {
    $this->userid = $userid;
  }

  // GET items
  public function getItems()
  {
    return $this->items;
  }

  // SET items
  public function setItems($items)
  {
    $this->items = $items;
  }

  // GET subtotals
  public function getSubtotals()
  {
    return $this->subtotals;
  }

  // SET subtotals
  public function setSubtotals($subtotals)
  {
    $this->subtotals = $subtotals;
  }

  // GET total_price
  public function getTotal_price()
  {
    return $this->total_price;
  }

  // SET total_price
  public function setTotal_price($total_price)
  {
    $this->total_price = $total_price;
  }
}
