<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$statment = $connection->prepare($sql);

$statment->execute([$username,$password]);

if($row = $statment->fetch()){
    echo "Sukses Masuk ".$row['username'];
}else{
    echo "Gagal Masuk";
}

var_dump($statment->fetch());

$connection = null;

