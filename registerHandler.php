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

$attemptedRegisterUsername = $_POST['Username'];
$attemptedRegisterPassword = $_POST['Password'];
$attemptedRegisterEmail = $_POST['Email'];

$service = new UserDataService();
$service->registerNewUser($attemptedRegisterUsername, $attemptedRegisterPassword, $attemptedRegisterEmail);
