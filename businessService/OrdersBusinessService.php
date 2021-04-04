<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * OrdersBusinessService.php: 
 *    description
 *    
 */


class OrdersBusinessService
{

  /*    
    creates a new line in the orders table. 
      - this will rely on the newItem function in the OrderDataService
    create multiple ines in the orders details table
      - relies on the addDetailsLine in OrderDataService
    ensure that the transaction is ATOMIC
  */
  function checkOut($order, $cart)
  {
    $db = new Database();
    $conn = $db->getConnection();

    $success = false;

    $conn->autocommit(FALSE);
    $conn->begin_transaction();

    $ordersDataService = new OrderDataService();
    $productBusinessService = new ProductBusinessService();

    $orderID = $this->addOrdersLine($order, $conn);

    foreach ($cart->getItems() as $product_id => $qty) {

      $product = $productBusinessService->getProductByID($product_id);

      $orderDetails = new OrderDetails($orderID, $product_id, $qty, ($qty * $product->getPrice()), "here is some description");
      $okdetails = $this->addDetailsLine($orderID, $orderDetails, $conn);
    }

    if ($orderID && $okdetails) {
      $conn->commit();
      $success = true;
    } else {
      $conn->rollback();
    }

    $conn->close();

    return $success;
  }

  function addOrdersLine($order, $conn)
  {
    $dataService = new OrderDataService();

    return $dataService->addOrdersLine($order, $conn);
  }

  function addDetailsLine($order_id, $orderDetails, $conn)
  {
    $dataService = new OrderDataService();

    return $dataService->addDetailsLine($order_id, $orderDetails, $conn);
  }

  // return all orders in the database
  function getAllOrders()
  {
    $dataService = new OrderDataService();

    return $dataService->getAllOrders();
  }

  // deletes an order item from the database
  function deleteItem($orderId)
  {
    $dataService = new OrderDataService();

    return $dataService->deleteItem($orderId);
  }

  // return a specific order
  function findById($id)
  {
    $dataService = new OrderDataService();

    return $dataService->findById($id);
  }

  // updates an order
  function updateOne($id, $order)
  {
    $dataService = new OrderDataService();

    return $dataService->updateOne($id, $order);
  }

  // gets the order details with id of $id 
  function getOrderDetails($id)
  {
    $dataService = new OrderDataService();

    return $dataService->getOrderDetails($id);
  }

  // gets the orders between date1 and date2 
  function getOrderBetweenDates($date1, $date2)
  {
    $dataService = new OrderDataService();

    return $dataService->getOrderBetweenDates($date1, $date2);
  }
}
