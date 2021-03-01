<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * loginHandler.php: 
 *    description
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

$attemptedLoginUsername = $_POST['Username'];
$attemptedLoginPassword = $_POST['Password'];

$service = new SecurityService($attemptedLoginUsername, $attemptedLoginPassword);
$loggedIn = $service->authenticate();

if ($loggedIn) {
  $_SESSION['principal'] = true;
  include "loginPassed.php";
} else {
  $_SESSION['principal'] = false;
  include "loginFailed.php";
}
