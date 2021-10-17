<?php 

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$sql = "INSERT INTO customers(id,name,email) 
VALUES ('pamungkas','pamungkas','pamungkas@test.com')";

// $sql2 = <<<'SQL' SQL;
$connection->exec($sql);

$connection = null;