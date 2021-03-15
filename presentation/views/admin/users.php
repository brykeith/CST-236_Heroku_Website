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

$pageTitle = 'Retail Store | Users';

include '../../views/shared/_header.php';
require_once '../../../utility/adminRestricted.php';
include '../../handlers/admin/displayAllUsersHandler.php';
include '../../views/shared/_footer.php';
