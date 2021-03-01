<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * autoLoader.php: 
 *    used by other php files ot auto load any class files that are called
 *    avoids the need to retype "require_once 'User.php'" over and over.
 *    
 *    
 */

spl_autoload_register(function ($class) {
  require_once $class . '.php';
});
