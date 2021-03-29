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


class OrderDataService
{

  // function checkOut($order, $cart)
  // {
  // }

  function addOrdersLine($order, $conn)
  {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $stmt = $conn->prepare("INSERT INTO mfqgkhncw3r34ada.orders (DATE, addresses_ID, users_ID, TOTAL_PRICE) VALUES (?,?,?,?)");



    // create variables to bind to parameters
    $order_id = $order->getId();
    $order_date = $order->getDate();
    $user_id = $order->getUser_Id();
    $user_address_id = $order->getAddress_id();
    $order_total = $order->getTotal();

    // bind params to the sql statement
    $stmt->bind_param("siid", $order_date, $user_address_id, $user_id, $order_total);

    if (!$stmt) :
      echo 'Something went wrong with the binding process. sql error?';
      exit;
    endif;

    echo '</br> </br>';
    echo 'order date: ' . $order_date . ' userid: ' . $user_id . ' user address id: ' .  $user_address_id . ' order_total: ' .  $order_total;

    echo '</br> </br>';
    print_r($stmt);

    // execute query
    echo '</br> </br>';
    $stmt->execute();

    // get results
    if ($stmt->affected_rows > 0) {
      echo 'something inserted for new order';
      return $conn->insert_id;
    } else {
      echo 'nothing inserted into the database during createNew in OrderDataService';
      return false;
    }
  }

  function addDetailsLine($order_id, $orderDetails, $conn)
  {

    // create a new line in the orders details table
    // return the id number of the last item inserted.

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    $stmt = $conn->prepare("INSERT INTO mfqgkhncw3r34ada.order_details (orders_id, products_id, QUANTITY, CURRENT_PRICE, CURRENT_DESCRIPTION) VALUES (?,?,?,?,?)");

    if (!$stmt) {
      echo "something wrong in the binding process. SQL statement error?";
      return -1;
    } else {
      $product_id = $orderDetails->getProduct_id();
      $quantity = $orderDetails->getQuantity();
      $price = $orderDetails->getCurrent_price();
      $description = $orderDetails->getCurrent_description();

      $stmt->bind_param("iiids", $order_id, $product_id, $quantity, $price, $description);

      $stmt->execute();

      if ($stmt->affected_rows > 0) {
        // success
        return $conn->insert_id;
      } else {
        // failed
        return false;
      }
    }
  }

  // return all orders in the database
  function getAllOrders()
  {
  }

  // deletes an order item from the database
  function deleteItem($orderId)
  {
  }

  // return a specific order
  function findById($id)
  {
  }

  // updates an order
  function updateOne($id, $order)
  {
  }

  // gets the order details with id of $id 
  function getOrderDetails($id)
  {
  }
}
