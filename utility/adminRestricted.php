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

if (isset($_SESSION['role']) == true && $_SESSION['role'] == 2) {
} else {
  header("Location: ../../views/errors/notAdmin.php");
}
