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

  function getAllUsers()
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT ID, USERNAME, FIRST_NAME, LAST_NAME, ROLE FROM mfqgkhncw3r34ada.users");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $user_array = array();

      while ($user = $result->fetch_assoc()) {
        array_push($user_array, $user);
      }
      return $user_array;
    }
  }




  function registerNewUser($firstName, $lastName, $username, $password, $role)
  {

    if ($this->findUserByUsername($username) == null) {
      $database = new Database();

      $sql_query = "INSERT INTO mfqgkhncw3r34ada.users(FIRST_NAME, LAST_NAME, USERNAME, PASSWORD, ROLE) VALUES ('$firstName', '$lastName', '$username', '$password', '$role')";

      $conn = $database->getConnection();
      $result = $conn->query($sql_query);
      return true;
    }
    return false;
  }

  function findUserByID($id)
  {
    $database = new Database();

    // echo  'te_pds product id: ' . $prod_id;

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM mfqgkhncw3r34ada.users WHERE ID = '$id'");

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an error in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      return $result->fetch_assoc();
    }
  }

  function findUserByUsername($username)
  {
    $database = new Database();

    // testing
    $sql_query = "SELECT ID, USERNAME, FIRST_NAME, LAST_NAME, ROLE FROM mfqgkhncw3r34ada.users WHERE USERNAME = '$username'";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if ($result->num_rows == 0) {
      return null;
    } else {
      $userData = $result->fetch_assoc();
      return $userData;
    }
  }

  function deleteUserWithId($id)
  {
    $database = new Database();

    $conn = $database->getConnection();

    // ! DEFINITELY NOT THE RIGHT WAY TO DO THIS
    $stmt1 = $conn->prepare("SET FOREIGN_KEY_CHECKS = 0;");
    $stmt2 = $conn->prepare("DELETE FROM mfqgkhncw3r34ada.users WHERE ID = $id;");


    $stmt1->execute();
    return $stmt2->execute();
  }

  function editUser($id,  $firstName, $lastName, $username, $role)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("UPDATE mfqgkhncw3r34ada.users
    SET FIRST_NAME = '$firstName', LAST_NAME = '$lastName', USERNAME = '$username', ROLE = $role
    WHERE ID = $id;");

    return $stmt->execute();
  }
}
