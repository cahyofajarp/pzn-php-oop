<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_pdo";
$username = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
    // echo  "sukses terkonesi kedatabase".PHP_EOL;
    // Menutup Conntection
    $connection = null;
}catch(PDOException $exception){
    echo "Gagal Terkoneksi ke database mysql : ". $exception->getMessage() .PHP_EOL;
}
