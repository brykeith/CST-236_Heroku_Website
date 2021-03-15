<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */
?>

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<div class="container">
  <table id="users" class="table table-light table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      <?php

      for ($i = 0; $i < count($users); $i++) {
        include '../../views/admin/_userTableItem.php';
      }

      ?>

    </tbody>
  </table>
</div>

<script>
  $(document).ready(function() {
    $('#users').DataTable();
  });
</script>