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

$securityService = new SecurityService($attemptedLoginUsername, $attemptedLoginPassword);
$loggedIn = $securityService->authenticate();

// echo $loggedIn;
// echo '<script> console.log("hello");</script>';

if ($loggedIn) {

  echo '<script> console.log("loginHandler check 1");</script>';


  $_SESSION['principal'] = true;

  $userBusinessService = new UserBusinessService();
  $user = $userBusinessService->findUserByUsername($attemptedLoginUsername);

  $_SESSION['role'] = $user['ROLE'];

  echo '<script> console.log("loginHandler session principal: ' . $_SESSION['principal'] . ' role: ' . $_SESSION['role'] . '");</script>';


  include "../../views/login/loginPassed.php";
} else {
  $_SESSION['principal'] = false;
  $_SESSION['role'] = false;

  echo '<script> console.log("loginHandler session principal: ' . $_SESSION['principal'] . ' role: ' . $_SESSION['role'] . '");</script>';


  include "../../views/login/loginFailed.php";
}
