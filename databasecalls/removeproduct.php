<?php
include ('../Connection.php');

$sql = 'DELETE FROM producten WHERE id = :id';

$statement = $conn->prepare($sql);
$statement->bindParam(':id',$_POST['id']);
$statement->execute();