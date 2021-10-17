<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$u = "admin'; #";
$p = "admin";

$username = $connection->quote($u);
$password = $connection->quote($p);

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

$admin = $connection->query($sql);

$success = false;

foreach($admin as $val){
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

