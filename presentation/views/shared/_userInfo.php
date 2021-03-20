<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * header.php: 
 *    starts session  
 */

$userBusinessService = new UserBusinessService();
$currentUser = $userBusinessService->findUserByID($_SESSION['userid']);


?>

<li class="nav-item">
  <a class="btn btn-outline-light" href="#">
    <div class="user-info-button d-flex">
      <img src="../../../resources/images/user.png" class="me-2" width="32" height="32">
      <h5><?= $currentUser['FIRST_NAME'] ?></h5>
    </div>
  </a>
</li>