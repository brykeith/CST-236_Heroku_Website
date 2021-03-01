<?php

require_once 'header.php';
require_once 'autoLoader.php';

$u = new UserDataService();
$u->findUserByID(2);

$u->registerNewUser("user13", "pass13", "email13@email.com");
