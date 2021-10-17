<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$statment = $connection->prepare($sql);

// $statment->bindParam(1,$username);

// $statment->bindParam(2,$password);

// cara ketiga biar lebih cepet hehehe 

// yaallah semoga bisa jadi back end programmer yaa :(((

$statment->execute([$username,$password]);

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

