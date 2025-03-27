<?php

$hostname = "localhost";
$username = "root";
$password = "%Will@1003";
$dbname = "mychatapp";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
    echo "database connection error".mysqli_connect_error();
}