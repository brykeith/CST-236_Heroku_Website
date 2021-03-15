<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * registerHandler.php: 
 *    receives POST request from register.html
 *    creates UserDataService. Calls the registerNewUser method
 *    registers new use
 *
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../views/shared/_header.php';

$attemptedRegisterFirstName = $_POST['FirstName'];
$attemptedRegisterLastName = $_POST['LastName'];
$attemptedRegisterUsername = $_POST['Username'];
$attemptedRegisterPassword = $_POST['Password'];
$attemptedRegisterRole = 1;

switch ($_POST['Role']) {
  case 'user':
    $attemptedRegisterRole = 1;
    break;
  case 'admin':
    $attemptedRegisterRole = 2;
    break;
  default:
    break;
}

$service = new UserBusinessService();

if ($service->registerNewUser($attemptedRegisterFirstName, $attemptedRegisterLastName, $attemptedRegisterUsername, $attemptedRegisterPassword, $attemptedRegisterRole)) {
  header("Location: ../../views/home/home.php");
}
