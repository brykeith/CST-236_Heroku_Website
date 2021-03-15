<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * filename: 
 *    description    
 *    
 */

$pageTitle = 'Retail Store | Edit User';

include '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';

$user_id = $_GET['id'];
$service = new UserBusinessService();
$user = $service->findUserById($user_id);

$firstName = $user['FIRST_NAME'];
$lastName = $user['LAST_NAME'];
$username = $user['USERNAME'];
$role = $user['ROLE'];

?>

<div class="container-fluid pt-4 d-flex justify-content-center">
  <form style="width: 24rem" class="card px-4 py-3" action="../../handlers/admin/editUserHandler.php" method="POST">
    <div class="mb-3">
      <label for="ID" class="form-label">ID: <?= $user_id ?></label>
      <input type="hidden" class="form-control" id="ID" name="ID" value="<?= $user_id  ?>" />
    </div>
    <div class="mb-3">
      <label for="FirstName" class="form-label">First Name: </label>
      <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?= $firstName ?>" />
    </div>
    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name: </label>
      <input type="text" class="form-control" id="LastName" name="LastName" value="<?= $lastName ?>" />
    </div>
    <div class="mb-3">
      <label for="Username" class="form-label">Username: </label>
      <input type="text" class="form-control" id="Username" name="Username" value="<?= $username ?>" />
    </div>

    <div class="mb-3">
      <label for="Role" class="form-label">Role: </label>
      <select class="form-select form-select-sm mb-3" id="Role" name="Role">
        <option>Select Role</option>

        <? if ($role == 2) { ?>
        <option value="1">User</option>
        <option selected value="2">Admin</option>
        <? } else { ?>
        <option selected value="1">User</option>
        <option value="2">Admin</option>
        <? } ?>

      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?
include '../../views/shared/_footer.php';