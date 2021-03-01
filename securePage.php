<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * securePage.php: 
 *    description
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == null || $_SESSION['principal'] == false) {
  header("Location: login.html");
}
