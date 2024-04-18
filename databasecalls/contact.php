<?php

include('../Connection.php');


$sql = "INSERT INTO contact(naam, achternaam, mail, opmerking) VALUES (:naam,:achternaam,:mail,:opmerking)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':naam', $_POST['naam']);
$stmt->bindParam(':achternaam', $_POST['achternaam']);
$stmt->bindParam(':mail', $_POST['mail']);
$stmt->bindParam(':opmerking', $_POST['opmerking']);

$result = $stmt->execute();

if($result){
    header('location: ../index.php');
}else{
    echo 'hoi';
}
?>