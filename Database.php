<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * database.php: 
 *    Class used to be out database object
 *    Returns a mysqli object
 *    connects to heroku database
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

  // returns mysqli object. connects to heroky database
  function getConnection()
  {
    $conn = new mysqli($this->servername, $this->server_username, $this->server_password, $this->database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error . "<br>");
    }
    return $conn;
  }
}
