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

  function registerNewUser($firstName, $lastName, $username, $password, $role)
  {
    $service = new UserDataService();
    $service->registerNewUser($firstName, $lastName, $username, $password, $role);
  }
}
