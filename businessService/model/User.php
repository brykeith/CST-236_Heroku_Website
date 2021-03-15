<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/13/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */


class User
{
  private $id;
  private $username;
  private $password;
  private $firstname;
  private $lastname;
  private $role;



  public function __construct($id, $username, $password, $firstname, $lastname, $role)
  {

    $this->id = $id;
    $this->username =  $username;
    $this->password =  $password;
    $this->firstname =  $firstname;
    $this->lastname =  $lastname;
    $this->role =  $role;
  }

  // GET id
  public function getID()
  {
    return $this->id;
  }

  // GET username
  public function getUsername()
  {
    return $this->username;
  }

  // SET username
  public function setUsername($username)
  {
    $this->username = $username;
  }

  // GET Password
  public function getPassword()
  {
    return $this->password;
  }

  // SET Password
  public function setPassword($password)
  {
    $this->password = $password;
  }

  // GET firstName
  public function getFirstName()
  {
    return $this->firstName;
  }

  // SET firstName
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  // GET lastName
  public function getLastName()
  {
    return $this->lastName;
  }

  // SET lastName
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  // GET role
  public function getRole()
  {
    return $this->role;
  }

  // SET role
  public function setRole($role)
  {
    $this->role = $role;
  }
}
