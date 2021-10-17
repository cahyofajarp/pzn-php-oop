<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('aeko@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('aeko@test.com', 'hi')");

// $connection->exec("DELETE FROM comments");

$connection->rollBack();

$connection = null;
