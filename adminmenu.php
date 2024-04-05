<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>plataan</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
</head>
<?php
include('header.php')
?>
<?php
include('loginscherm.php')
?>

<body>
<main>
    <section class="frietformulier">
        <?php
        include('Connection.php');

        $sql = "SELECT * FROM producten WHERE categorie = 'friet' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $value) {
            echo '<div class="frietgerechten frietkeuzes' . $key . '">';
            echo '<form action="databasecalls/removeproduct.php" method="post">';
            foreach ($value as $key1 => $value2) {

                if ($key1 == 'Productnaam') {
                    echo '<h2>' . $value2 . '</h2>';

                } elseif ($key1 == 'Omschrijving') {

                    echo '<h4>' . $value2 . '</h4>';
                } elseif ($key1 == 'Prijs') {

                    echo '<h4 id="waarde">' . $value2 . '</h4>';
                } elseif ($key1 == 'img') {

                    echo '<img class="frietimg" src="' . $value2 . '"/>';
                } elseif ($key1 == 'Id') {
                    echo '<input type="hidden" name="id" value="'.$value2 .'" hidden>';

                }


            }

            echo '<input type="submit" value="verwijder">';
            echo '</form>';
            echo '</div>';
        }

        ?>
    </section>
    <section class="frietformulier">
        <?php
        include('Connection.php');


        $sql = "SELECT * FROM producten WHERE categorie = 'snacks' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $value) {
            echo '<div class="frietgerechten frietkeuzes' . $key . '">';

            foreach ($value as $key1 => $value2) {

                if ($key1 == 'Productnaam') {
                    echo '<h2>' . $value2 . '</h2>';

                } elseif ($key1 == 'Omschrijving') {

                    echo '<h4>' . $value2 . '</h4>';
                } elseif ($key1 == 'Id') {
                    echo '<img src="assets/img/plus.png" onclick="fucntie(' . $value2 . ')" id="addorder' . $value2 . '">';
                } elseif ($key1 == 'Prijs') {

                    echo '<h4 id="waarde">' . $value2 . '</h4>';
                } elseif ($key1 == 'img') {

                    echo '<img class="frietimg" src="' . $value2 . '"/>';
                }


            }

            echo '</div>';
        }

        ?>
    </section>
</main>
<?php
include('footer.php')
?>
</body>
</html>