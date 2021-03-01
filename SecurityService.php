<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * SecurityService.php: 
 *    Used to authenticate the user login data
 *    
 *    
 *    
 */

require_once 'header.php';
require_once 'autoLoader.php';

class SecurityService
{

  private $username = "";
  private $password = "";

  function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  public function authenticate()
  {
    $database = new Database();

    echo "<br>USERNAME: $this->username";
    echo "<br>PASSWORD: $this->password";

    $sql_query = "SELECT * FROM mfqgkhncw3r34ada.users WHERE USERNAME = '$this->username' AND PASSWORD = '$this->password'";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if ($result->num_rows == 0) {
      return false;
    } else if ($result->num_rows == 1) {
      return true;
    }
  }
}
