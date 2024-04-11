<?php
session_start();
include('../Connection.php');

try {
    $keyword = '%' . $_POST['search'] . '%';
    $stmt = $conn->prepare("SELECT * FROM producten WHERE Productnaam LIKE :keyword OR Omschrijving LIKE :keyword");
    $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($result as $key => $value) {

            echo "<div class='frietgerechten'>";
            foreach ($value as $key1 => $value2) {

                if ($key1 == 'Productnaam') {
                    echo '<h2>' . $value2 . '</h2>';

                } elseif ($key1 == 'Omschrijving') {

                    echo '<h4>' . $value2 . '</h4>';
                } elseif ($key1 == 'Prijs') {

                    echo '<h4 id="waarde">' . $value2 . '</h4>';
                } elseif ($key1 == 'img') {

                    echo '<img class="frietimg" src="' . $value2 . '"/>';
                }

            }
            echo '<img class="snack" src="assets/img/plus.png" onclick="winkelwagen(' . $value['Id'] . ')" id="addorder' . $value['Id'] . '">';
            echo '</div>';
        }

} catch (PDOException $e) {
    echo "Geen product gevonden: " . $e->getMessage();
}
?>