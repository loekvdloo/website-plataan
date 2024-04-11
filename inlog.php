<?php

include 'Connection.php';

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord, rol FROM users WHERE gebruikersnaam=:gebruikersnaam AND wachtwoord=:wachtwoord");
$stmt->bindParam(':gebruikersnaam', $_POST['gebruikersnaam']);
$stmt->bindParam(':wachtwoord', $_POST['wachtwoord']);

$result = $stmt->execute();
//$stmt->fetchAll();

$data = $stmt->fetch();

if ($result) {
   session_start();
    $_SESSION['user'] = $data['gebruikersnaam'];
    $_SESSION['rol'] = $data['rol'];
    header('location:index.php');
} else {
    echo 'niet';
}
