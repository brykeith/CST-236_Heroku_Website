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

$pageTitle = 'Retail Store | Login';


include '../../views/shared/_header.php';

?>

<div class="loginForm-wrapper wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../../resources/images/user.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="../../handlers/login/loginHandler.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="Username" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="Password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

<?

include '../../views/shared/_footer.php';