<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * Product.php: 
 *    description
 *    
 *    
 *    
 */


class Product
{
  private $id;
  private $name;
  private $desc;
  private $price;

  public function __construct($id, $name, $desc, $price)
  {
    $this->id = $id;
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
  }

  // GET id
  public function getId()
  {
    return $this->id;
  }

  // GET name
  public function getName()
  {
    return $this->name;
  }

  // SET name
  public function setName($name)
  {
    $this->name = $name;
  }

  // GET desc
  public function getDesc()
  {
    return $this->desc;
  }

  // SET desc
  public function setDesc($desc)
  {
    $this->desc = $desc;
  }

  // GET price
  public function getPrice()
  {
    return $this->price;
  }

  // SET price
  public function setPrice($price)
  {
    $this->price = $price;
  }
}
