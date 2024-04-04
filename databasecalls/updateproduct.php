<?php
include('..\Connection.php');

$sql = "UPDATE producten SET Omschrijving=:omschrijving WHERE Id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam('omschrijving', $_POST['omschrijving']);
$stmt->bindParam('id', $_POST['ind']);
$stmt->execute();

?>