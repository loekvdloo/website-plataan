<?php

include('Connection.php');


$sql = "SELECT * FROM producten WHERE `categorie` = 'friet' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();




