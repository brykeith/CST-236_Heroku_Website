<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * autoLoader.php: 
 *    description
 *    
 *    
 *    
 */

spl_autoload_register(function ($class) {
  require_once $class . '.php';
});
