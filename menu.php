<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>plataan</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
<body>
<?php
include('header.php')
?>
<main class="menupagina">
    <?php
    include('loginscherm.php')
    ?>
    <?php
    include('getgerechten.php')
    ?>
    <section class="balkmenu">
        <a>Friet</a>
        <a>Snacks</a>
        <a>Broodjes</a>
        <a>Menu's</a>
        <a>Salades</a>
        <a>Ijs & Shakes</a>
        <a>Sauzen</a>
        <a>Dranken</a>
        <a id="knopbestellen"> Jouw bestelling</a>
        <img src="assets/img/cart%201.png">


    </section>
    <div class="menu">
    <section class="frietformulier">
        <?php
        foreach ($result as $key => $value) {
            echo '<div class="frietgerechten frietkeuzes' . $key . '">';
            foreach ($value as $key1 => $value2) {

                if ($key1 == 'Productnaam') {
                    echo '<h1>' . $value2 . '</h1>';

                } elseif ($key1 == 'Omschrijving') {

                    echo '<h3>' . $value2 . '</h3>';
                } elseif ($key1 == 'Prijs') {

                    echo '<h4>' . $value2 . '</h4>';
                } elseif ($key1 == 'img') {

                    echo '<h4>' . ($value2) . '</h4>';
                }


            }
            echo '</div>';
        }

        ?>
    </section>
    <section class="winkelmandje">
<div class="bestellingsmandje"></div>
    </section>
    </div>
</main>
<?php
include('footer.php')
?>
</body>
</html>