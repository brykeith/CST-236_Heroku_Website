<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * ProductBusinessService.php: 
 *    description
 *    
 */
// header.php
// autoloaded.php

class ProductBusinessService
{

  // returns an array ALL products
  function getAllProducts()
  {
    $dataService = new ProductDataService();
    return $dataService->getAllProducts();
  }

  function searchByNameOrDescription($searchQueryString)
  {
    $dataService = new ProductDataService();
    return $dataService->searchByNameOrDescription($searchQueryString);
  }

  function getProductByID($prod_id)
  {
    $dataService = new ProductDataService();
    return $dataService->getProductByID($prod_id);
  }

  function editProduct($id, $name, $desc, $price)
  {
    $dataService = new ProductDataService();
    return $dataService->editProduct($id, $name, $desc, $price);
  }

  function deleteProductWithId($id)
  {
    $dataService = new ProductDataService();
    return $dataService->deleteProductWithId($id);
  }

  function addProduct($name, $desc, $price)
  {
    $dataService = new ProductDataService();
    return $dataService->addProduct($name, $desc, $price);
  }
}
