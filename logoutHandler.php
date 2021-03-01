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
require_once 'header.php';
require_once 'autoLoader.php';

$_SESSION['principal'] = false;
include "logoutSuccess.php";
