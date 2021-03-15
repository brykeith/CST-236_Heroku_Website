<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * displayAllUsers.php: 
 *    
 *    
 *    
 *    
 */

require_once '../../../utility/adminRestricted.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// create an instance of the business service
$bs = new UserBusinessService();

// the find method returns an array of products
$users = $bs->getAllUsers();

if ($users) {
  // we got some results
  include '../../views/admin/_displayUserSearchResults.php';
} else {
  echo 'no results found';
}
