<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * ProductDataService.php: 
 *    description
 *    
 */


class ProductDataService
{

  // returns an array ALL products
  function getAllProducts()
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.products");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $product_array = array();

      while ($product = $result->fetch_assoc()) {
        array_push($product_array, $product);
      }
      return $product_array;
    }
  }

  // function findProductsByName($searchName){
  //   $database = new Database();

  //   $conn = $database->getConnection();

  //   $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.products WHERE PRODUCT_NAME LIKE")
  // }


  // returns an array of products that match the search
  function searchByNameOrDescription($searchQueryString)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.products WHERE PRODUCT_NAME LIKE ? OR PRODUCT_DESCRIPTION LIKE ?");

    $like_productName = "%" . $searchQueryString . "%";
    $like_productDesc = "%" . $searchQueryString . "%";
    $stmt->bind_param("ss", $like_productName, $like_productDesc);

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $products_array = array();

      while ($product = $result->fetch_assoc()) {
        array_push($products_array, $product);
      }
      return $products_array;
    }
  }

  // returns an array of products that match the search
  function getProductByID($prod_id)
  {
    $database = new Database();

    // echo  'te_pds product id: ' . $prod_id;

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.products WHERE ID = '$prod_id'");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      return $result->fetch_assoc();

      // $products_array = array();

      // while ($product = $result->fetch_assoc()) {
      //   array_push($products_array, $product);
      // }
      // return $products_array;
    }
  }
}
