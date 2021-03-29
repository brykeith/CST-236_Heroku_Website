<?php

class OrderDetails
{

  private $id;
  private $order_id;
  private $product_id;
  private $quantity;
  private $current_price;
  private $current_description;

  function __construct($order_id, $product_id, $quantity, $current_price, $current_description)
  {
    $this->id = 0;
    $this->order_id = $order_id;
    $this->product_id = $product_id;
    $this->quantity = $quantity;
    $this->current_price = $current_price;
    $this->current_description = $current_description;
  }

  function getId()
  {
    return $this->id;
  }

  function getOrder_id()
  {
    return $this->order_id;
  }

  function getProduct_id()
  {
    return $this->product_id;
  }

  function getQuantity()
  {
    return $this->quantity;
  }

  function getCurrent_price()
  {
    return $this->current_price;
  }

  function getCurrent_description()
  {
    return $this->current_description;
  }

  function setId($id)
  {
    $this->id = $id;
  }

  function setOrder_id($order_id)
  {
    $this->order_id = $order_id;
  }

  function setProduct_id($product_id)
  {
    $this->product_id = $product_id;
  }

  function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  function setCurrent_price($current_price)
  {
    $this->current_price = $current_price;
  }

  function setCurrent_description($current_description)
  {
    $this->current_description = $current_description;
  }
}
