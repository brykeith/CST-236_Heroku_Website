<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * logoutHandler.php: 
 *    resets the principal session variable to false
 *    redirects to the home page
 *    
 *    
 *    
 */
require_once '../../views/shared/_header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$_SESSION['principal'] = false;
include "../../views/logout/logoutSuccess.php";
