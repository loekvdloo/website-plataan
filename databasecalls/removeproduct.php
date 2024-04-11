<?php
include('../Connection.php');

$sql = 'DELETE FROM producten WHERE Id = :id';
var_dump($_POST['id']);
$statement = $conn->prepare($sql);
$statement->bindParam(':id', $_POST['id']);
$result = $stmt->execute();

if($result){
    header('location: ../index.php');
}else{
    echo 'hoi';
}
?>
?>


