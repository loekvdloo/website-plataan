<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=plataan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

}

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$result = $stmt->execute();

$result = $stmt->fetchall();
?>





