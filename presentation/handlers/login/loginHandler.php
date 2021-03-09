<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * loginHandler.php: 
 *    receives POST request from login.html
 *    authenticats login data. returns either loginPasses.php or loginFailed.php
 *    
 *    
 *    
 */
require_once '../../views/shared/_header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$attemptedLoginUsername = $_POST['Username'];
$attemptedLoginPassword = $_POST['Password'];

$service = new SecurityService($attemptedLoginUsername, $attemptedLoginPassword);
$loggedIn = $service->authenticate();

if ($loggedIn) {
  $_SESSION['principal'] = true;
  include "../../views/login/loginPassed.php";
} else {
  $_SESSION['principal'] = false;
  include "../../views/login/loginFailed.php";
}
