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

unset($_SESSION['principal']);
unset($_SESSION['userid']);
unset($_SESSION['role']);
unset($_SESSION['cart']);
header("Location: ../../views/home/home.php");
include "../../views/logout/logoutSuccess.php";
