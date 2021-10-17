<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";

$dt = $connection->query($sql);

foreach($dt as $val){
    echo "ID : ". $val['id'] .PHP_EOL;
    echo "Name : " .$val['name'] .PHP_EOL;
    echo "Email : ". $val['email'] .PHP_EOL;
}