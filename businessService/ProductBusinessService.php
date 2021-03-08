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
}
