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

require_once '../../../utility/adminRestricted.php';

$ordersBusinessService = new OrdersBusinessService();

$orders = $ordersBusinessService->getOrderBetweenDates($date1, $date2);
