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

<div class="form-wrapper">
  <div class="form-border">
    <div class="form-title">Welcome!</div>
    <form action="../../handlers/login/loginHandler.php" method="POST">
      <label for="Username">Username:</label>
      <input type="text" name="Username" id="Username" /> <br />
      <label for="Password">Password:</label>
      <input type="text" name="Password" id="Password" /> <br />
      <div class="submit-container">
        <input class="submit" type="submit" value="Login!" />
      </div>
    </form>
  </div>
</div>

<?

include '../../views/shared/_footer.php';