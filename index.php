<?php

/*************** Including separeted files to one */
require_once('processcsv.php');
require_once('Procorder.php');
require_once('sorting.php');
require_once('OrderH.php');

/*************** call objects */
$name = 'orders.csv';
$csv = new Csv();
$tombok = $csv->proccsv($name);
$orders = $tombok[0];
$ordersH = $tombok[1];
$sorting = new Sorting();
$neworder = $sorting->sort($orders);
$orderh = new OrderH();
$ordersH = $orderh->proch($ordersH);
$procorder = new Procorder($argc, $argv);
$procedorder = $procorder->process($neworder,$ordersH);

?>