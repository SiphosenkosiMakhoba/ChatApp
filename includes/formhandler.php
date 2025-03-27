<?php
include_once "configPDO.php";
//  var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["fname"];
    $lastname= $_POST["lname"];
    $phoneNumber = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    echo "my name is {$firstname}, my Surname is {$lastname}, you can contact me at {$phoneNumber} or {$email} and the password is {$pwd}";
}
// header("Location: ../index.php");