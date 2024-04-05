<?php

include('../Connection.php');


$sql = "INSERT INTO producten(Productnaam, Omschrijving, Prijs, img, categorie) VALUES (:Productnaam,:Omschrijving,:Prijs,:img,:categorie)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':Productnaam', $_POST['Productnaam']);
$stmt->bindParam(':Omschrijving', $_POST['Omschrijving']);
$stmt->bindParam(':Prijs', $_POST['Prijs']);
$stmt->bindParam(':img', $_POST['img']);
$stmt->bindParam(':categorie', $_POST['categorie']);


$stmt->execute();
?>