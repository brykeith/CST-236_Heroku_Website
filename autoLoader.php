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

  echo '<br><br>';
  // get the difference in the folders between the location
  // of autoloader and the file that called it
  $lastdirectories = substr(getcwd(), strlen(__DIR__));
  echo '<br>getcwd = :' . getcwd() . '<br>';
  echo '__DIR__ = : ' . __DIR__ . '<br>';
  echo 'last directories = : ' . $lastdirectories . '<br>';

  // count the number of slashes (folder depth)
  $numberOfLastDirectories = substr_count($lastdirectories, '/');

  echo '<br> number of last directories: ' . $numberOfLastDirectories . '<br>';

  // the list of possible locations that classes are found in this app
  $directories = [
    'businessService', 'businessService/model',
    'database', 'presentation', 'presentation/handlers',
    'presentation/handlers/login', 'presentation/handlers/logout', 'presentation/handlers/products',
    'presentation/handlers/register', 'presentation/views',
    'presentation/views/home', 'presentation/views/login', 'presentation/views/logout',
    'presentation/views/products', 'presentation/views/register',
    'presentation/views/shared', 'utility'
  ];


  // look inside each directory for the desired class.
  foreach ($directories as $d) {
    $currentDirectory = $d;
    echo '<br> line 45 ' . $currentDirectory . '<br>';
    for ($x = 0; $x < $numberOfLastDirectories; $x++) {
      $currentDirectory = "../" . $currentDirectory;
      echo '<br> line 48 ' . $currentDirectory . '<br>';
    }
    $classfile = $currentDirectory . '/' . $class . '.php';
    echo '<br> line 51 ' . $classfile . '<br>';


    if (is_readable($classfile)) {
      echo '<br> line 55 . classfile is readable' . $classfile . '<br>';
      if (require $d . '/' . $class . ".php") {
        echo '<br> line 57: required ' . $d . '/' . $class . '.php successfully <br>';

        break;
      } else {
        echo '<br> line 57: did NOT reuire ' . $d . '/' . $class . '.php successfully  <br>';
      }
    } else {
      echo '<br>' . $classfile . ' is not readable.';
    }
  }
});
