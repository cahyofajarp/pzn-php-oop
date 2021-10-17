<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();


$connection->exec("INSERT INTO comments(email,comment) VALUES ('cahyo@test.com','hello')");

$id = $connection->lastInsertId();

echo $id;

$connection = null;

