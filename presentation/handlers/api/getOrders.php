<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * getOrders.php: 
 *    description
 *    
 *    test url: /presentation/handlers/api/getOrders.php
 *    test url: /presentation/handlers/api/getOrders.php?date1=2021-03-31&date2=2021-04-09
 *    
 */
include '../../../autoLoader.php';

$date1 = $_GET['date1'];
$date2 = $_GET['date2'];



$ordersBusinessService = new OrdersBusinessService();

/*===================================
    ORDERS JSON API
====================================*/

// get all orders
if (!$date1 && !$date2) {
  $orders = $ordersBusinessService->getAllOrders();

  if ($orders == null) {
    echo "Sorry, there were no orders found. <br>";
    exit;
  }

  echo json_encode($orders);
}

// get users by id
else if ($date1 && $date2) {

  $orders = $ordersBusinessService->getOrderBetweenDates($date1, $date2);

  if ($orders == null) {
    echo "Sorry, there were no orders found. <br>";
    exit;
  }

  echo json_encode($orders);
}
