<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * database.php: 
 *    description
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

class Database
{
  private $servername = "hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  private $server_username = "le0eocrpfdcxa8ti";
  private $server_password = "fjv9uf99x6yucxoi";
  private $database = "mfqgkhncw3r34ada";

  function getConnection()
  {
    $conn = new mysqli($this->servername, $this->server_username, $this->server_password, $this->database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error . "<br>");
    }
    return $conn;
  }
}
