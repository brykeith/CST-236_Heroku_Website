<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 
 * 
 * securePage.php: 
 *    used anytime a page needs to be restricted to a logged in user
 *    checks that the principal session variable is valid
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == null || $_SESSION['principal'] == false) {
  header("Location: login.html");
}
