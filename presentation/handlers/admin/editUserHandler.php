<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */

require_once '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$id =  $_POST['ID'];
$firstName =  $_POST['FirstName'];
$lastName =  $_POST['LastName'];
$username =  $_POST['Username'];
$role =  $_POST['Role'];

$userBusinessService = new UserBusinessService();

if ($userBusinessService->editUser($id,  $firstName, $lastName, $username, $role)) {
  header("Location: ../../views/admin/users.php");
} else {

  //  TODO: what happens when edit is unsuccessful?
  // header("Location: ../../views/admin/users.php");
};
