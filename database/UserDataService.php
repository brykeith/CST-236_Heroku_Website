<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * UserDataService.php: 
 *    Used for searching user records by username, id and email.
 *    Used to registerNewUser
 *      cannot be done if username already exists
 *    
 *    
 *    
 */

class UserDataService
{

  function registerNewUser($firstName, $lastName, $username, $password, $role)
  {

    if (!$this->findUserByUsername($username)) {
      $database = new Database();

      // check username not already exists

      echo "<br>ADDING USER";
      echo "<br>FirstName: $firstName";
      echo "<br>LastName: $lastName";
      echo "<br>USERNAME: $username";
      echo "<br>PASSWORD: $password";
      echo "<br>Role: $role";


      echo "<br><a href=\"login.html\">login</a><br>";

      $sql_query = "INSERT INTO mfqgkhncw3r34ada.users(FIRST_NAME, LAST_NAME, USERNAME, PASSWORD, ROLE) VALUES ('$firstName', '$lastName', '$username', '$password', '$role')";

      $conn = $database->getConnection();
      $result = $conn->query($sql_query);
    }
  }

  function findUserByID($id)
  {
    $database = new Database();

    // testing
    echo "testing the database info <br>";
    print_r($database);

    echo "<br> I am searching for id: " . $id;

    $sql_query = "SELECT ID, USERNAME, PASSWORD, EMAIL FROM mfqgkhncw3r34ada.users WHERE ID = $id";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if ($result->num_rows == 0) {
      return null;
    } else {
      echo "I found " . $result->num_rows . "results! <br>";
      return "I found " . $result->num_rows . "results! <br>";
    }
  }

  function findUserByUsername($username)
  {
    $database = new Database();

    // testing
    $sql_query = "SELECT * FROM mfqgkhncw3r34ada.users WHERE USERNAME = '$username'";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if ($result->num_rows == 0) {
      return false;
    } else {
      echo "Username already exists <br>";
      return true;
    }
  }
}
