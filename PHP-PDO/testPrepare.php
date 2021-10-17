<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$statment = $connection->prepare($sql);

$statment->bindParam("username",$username);
$statment->bindParam("password",$password);

$statment->execute();

$success = false;

foreach($statment as $val){
    if($val){
        $success = true;
        $user = $val['username'];
    }
}

if($success ==  true){
    echo "Sukses Masuk ".$user;
}else{
    echo "Gagal Masuk";
}

$connection = null;

