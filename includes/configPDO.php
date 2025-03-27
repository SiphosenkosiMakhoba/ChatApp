<?php
$host = "localhost";
$dbname ="mychatapp";
$pass = "%Will@1003";
$user = "root";
// $charset = "utf8";

$dsn = "mysql:host=$host;dbname=$dbname";
try{
    $pdo = new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
    throw new PDOException($e->getMessage());
}
