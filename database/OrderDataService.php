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

    // execute query
    $stmt->execute();

    // get results
    if ($stmt->affected_rows > 0) {
      return $conn->insert_id;
    } else {
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
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.orders INNER JOIN mfqgkhncw3r34ada.order_details ON mfqgkhncw3r34ada.orders.ID=mfqgkhncw3r34ada.order_details.orders_ID ORDER BY mfqgkhncw3r34ada.orders.TOTAL_PRICE DESC");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $order_array = array();

      while ($user = $result->fetch_assoc()) {
        array_push($order_array, $user);
      }
      return $order_array;
    }
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

  // gets the orders between date1 and date2 
  function getOrderBetweenDates($date1, $date2)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.orders INNER JOIN mfqgkhncw3r34ada.order_details ON mfqgkhncw3r34ada.orders.ID=mfqgkhncw3r34ada.order_details.orders_ID WHERE DATE BETWEEN '$date1' AND '$date2' ORDER BY mfqgkhncw3r34ada.orders.TOTAL_PRICE DESC");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $order_array = array();

      while ($user = $result->fetch_assoc()) {
        array_push($order_array, $user);
      }
      return $order_array;
    }
  }

  // tries to apply entered promo code 
  function applyPromoCode($code)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt_getCode = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.promo_codes WHERE CODE = '$code'");

    $stmt_getCode->execute();

    $getCodeResult = $stmt_getCode->get_result();

    if (!$getCodeResult) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($getCodeResult->num_rows == 0) {
      return null;
    } else {
      $promo_code = $getCodeResult->fetch_assoc();
      $promo_id = $promo_code['ID'];
      $user_id = $_SESSION['userid'];
      $discount = $promo_code['DISCOUNT'];

      $stmt_checkUnused = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.used_promo_codes WHERE promo_codes_ID = '$promo_id' AND users_ID = '$user_id' ");
      $stmt_checkUnused->execute();

      $checkUnusedResult = $stmt_checkUnused->get_result();

      if ($checkUnusedResult->num_rows < 1) {

        $stmt_markCodeUsed = $conn->prepare("INSERT INTO mfqgkhncw3r34ada.used_promo_codes (promo_codes_ID, users_ID) VALUES ('$promo_id', '$user_id') ");
        $stmt_markCodeUsed->execute();


        $_SESSION['promo'] = $promo_code;
        // return $promo_code;
      }
    }
  }
}
