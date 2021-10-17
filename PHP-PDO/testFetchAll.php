<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM customers";

$statment = $connection->query($sql);

$customers = $statment->fetchAll();

var_dump($customers);

$connection = null;

