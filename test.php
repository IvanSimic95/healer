<?php
include_once  $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$order_date = date('n');
$order_date = $order_date +1;
echo $order_date;
echo monthName($order_date);
?>