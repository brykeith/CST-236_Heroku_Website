<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * getUsers.php: 
 *    description
 *    
 *    
 *    
 */
include '../../../autoLoader.php';

$id = $_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];

$userBusinessService = new UserBusinessService();

/*===================================
    USERS JSON API
====================================*/

// get all users
if (!$id && !$firstname && !$lastname) {
  $users = $userBusinessService->getAllUsers();

  if ($users == null) {
    echo "Sorry, there were no users found. <br>";
    exit;
  }

  echo json_encode($users);
}

// get users by id
else if ($id && !$firstname && !$lastname) {

  $users = $userBusinessService->findUserByID($id);

  if ($users == null) {
    echo "Sorry, there were no users found. <br>";
    exit;
  }

  echo json_encode($users);
}

// get users by first name
else if (!$id && $firstname && !$lastname) {
  $users = $userBusinessService->findUserByFirstname($firstname);

  if ($users == null) {
    echo "Sorry, there were no users found. <br>";
    exit;
  }

  echo json_encode($users);
}

// get users by last name
else if (!$id && !$firstname && $lastname) {
  $users = $userBusinessService->findUserByLastname($lastname);

  if ($users == null) {
    echo "Sorry, there were no users found. <br>";
    exit;
  }

  echo json_encode($users);
}
