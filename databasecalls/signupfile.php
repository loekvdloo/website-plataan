<?php

include('../Connection.php');


$sql = "INSERT INTO users(Gebruikersnaam, Wachtwoord, email) VALUES (:Gebruikersnaam,:Wachtwoord,:email)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':Gebruikersnaam', $_POST['Gebruikersnaam']);
$stmt->bindParam(':Wachtwoord', $_POST['Wachtwoord']);
$stmt->bindParam(':email', $_POST['email']);

$result = $stmt->execute();

if($result){
    header('location: ../index.php');
}else{
    echo 'hoi';
}
?>