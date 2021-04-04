<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * UserBusinessService.php: 
 *    Used to authenticate the user login data
 *    
 *    
 *    
 */

class UserBusinessService
{

  function getAllUsers()
  {
    $dataService = new UserDataService();
    return $dataService->getAllUsers();
  }

  function registerNewUser($firstName, $lastName, $username, $password, $role)
  {
    $service = new UserDataService();

    return $service->registerNewUser($firstName, $lastName, $username, $password, $role);
  }

  function findUserByID($id)
  {
    $service = new UserDataService();

    return $service->findUserByID($id);
  }

  function findUserByUsername($username)
  {
    $service = new UserDataService();

    return $service->findUserByUsername($username);
  }

  function findUserByFirstname($firstname)
  {
    $service = new UserDataService();
    echo 'here2';


    return $service->findUserByFirstname($firstname);
  }

  function findUserByLastname($lastname)
  {
    $service = new UserDataService();

    return $service->findUserByLastname($lastname);
  }

  function deleteUserWithId($id)
  {
    $dataService = new UserDataService();
    return $dataService->deleteUserWithId($id);
  }

  function editUser($id,  $firstName, $lastName, $username, $role)
  {
    $dataService = new UserDataService();
    return $dataService->editUser($id, $firstName, $lastName, $username, $role);
  }
}
