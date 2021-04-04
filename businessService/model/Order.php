<?php

class Order
{

  private $id;
  private $date;
  private $user_id;
  private $address_id;
  private $total;


  function __construct($user_id, $address_id, $total)
  {
    date_default_timezone_set('MST');

    $this->id = 0;
    $this->date = date("Y-m-d H:i:s");
    $this->user_id = $user_id;
    $this->address_id = $address_id;
    $this->total = $total;
  }

  function getId()
  {
    return $this->id;
  }

  function getDate()
  {
    return $this->date;
  }

  function getUser_id()
  {
    return $this->user_id;
  }

  function getAddress_id()
  {
    return $this->address_id;
  }

  function getTotal()
  {
    return $this->total;
  }

  function setId($id)
  {
    $this->id = $id;
  }

  function setDate($date)
  {
    $this->date = $date;
  }

  function setUser_id($user_id)
  {
    $this->user_id = $user_id;
  }

  function setAddress_id($address_id)
  {
    $this->address_id = $address_id;
  }

  function setTotal($total)
  {
    $this->total = $total;
  }
}
