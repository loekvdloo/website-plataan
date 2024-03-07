<?php


global $conn;
include 'Connection.php';

echo "hoi";
$user = $_GET['gebruikersnaam'];
$pass = $_GET['wachtwoord'];

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user' AND wachtwoord='$pass'");
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
if(isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';
}
