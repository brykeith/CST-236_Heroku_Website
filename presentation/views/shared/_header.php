<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * header.php: 
 *    starts session  
 */
include '../../../autoLoader.php';
session_start();

$loggedin = false;
if (isset($_SESSION['userid'])) {
  $loggedin = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link href="../../../resources/styles/global.css" rel="stylesheet" />
</head>

<body>
  <!-- ! HERE IS COMMENT -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../views/home/home.php">ECommerse</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!--===================================
                  IF USER LOGGED IN,
                  SHOW USER INFO AND CART BUTTON
              ===================================   -->
          <?php
          if ($loggedin) {
            include '../../views/shared/_userInfo.php';
            include '../../views/shared/_cartIcon.php';
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="../../views/home/home.php">Home</a>
          </li>
          <? if($loggedin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="../../views/logout/logout.php">Log Out</a>
          </li>
          <? } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="../../views/login/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../views/register/register.php">Sign Up</a>
          </li>
          <? } ?>

          <?php
          if (isset($_SESSION['role']) == true && $_SESSION['role'] == 2) {
            include '../../views/shared/_adminSelect.php';
          }
          ?>


        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>