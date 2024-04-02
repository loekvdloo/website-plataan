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
    <section class="balkmenu" id="balkmenu">
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
        <script>
            window.addEventListener("scroll", () => {
                let winkelmandje = document.getElementById("winkelmandje");
                let header = document.querySelector("header");

                if (window.pageYOffset >= header.offsetHeight) {
                    winkelmandje.classList.add("bewegenmandje");
                } else {
                    winkelmandje.classList.remove("bewegenmandje");
                }
            });

        </script>
        <section class="winkelmandje" id="winkelmandje">
            <div class="bestellingsmandje"></div>
        </section>

    </div>
</main>
<script>
    window.addEventListener("scroll", () => {
        let balkmenu = document.getElementById("balkmenu");
        let header = document.querySelector("header");

        if (window.pageYOffset >= header.offsetHeight) {
            balkmenu.classList.add("sticky");
        } else {
            balkmenu.classList.remove("sticky");
        }
    });

</script>

<?php
include('footer.php')
?>
</body>
</html>