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
    include('Connection.php');


    $sql = "SELECT * FROM producten WHERE categorie = 'dranken' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <section class="balkmenu" id="balkmenu">
        <a href="menufriet.php">Friet</a>
        <a href="menusnacks.php">Snacks</a>
        <a href="menubroodjes.php">Broodjes</a>
        <a href="menumenu's.php">Menu's</a>
        <a href="menusalades.php">Salades</a>
        <a href="menuijs.php">Ijs & Shakes</a>
        <a href="menusauzen.php">Sauzen</a>
        <a href="menudranken.php">Dranken</a>
        <a href="zoeken.php">zoeken</a>
        <img alt="zoeken" id="zoekbalkmenu" src="assets/img/zoek.png">
        <a id="knopbestellen"> Jouw bestelling</a>
        <img alt="winkelmandje" id="winkelmandjebankmenu" src="assets/img/cart%201.png">
    </section>

    <section class="balkmenu" id="balkmenu">
        <a href="menufriet.php">Friet</a>
        <a href="menusnacks.php">Snacks</a>
        <a href="menubroodjes.php">Broodjes</a>
        <a href="menumenu's.php">Menu's</a>
        <a href="menusalades.php">Salades</a>
        <a href="menuijs.php">Ijs & Shakes</a>
        <a href="menusauzen.php">Sauzen</a>
        <a href="menudranken.php">Dranken</a>
        <a href="zoeken.php">zoeken</a>
        <img alt="zoeken" id="zoekbalkmenu" src="assets/img/zoek.png">
        <a id="knopbestellen"> Jouw bestelling</a>
        <img alt="winkelmandje" id="winkelmandjebankmenu" src="assets/img/cart%201.png">
    </section>

    <div class="menu">
        <section class="frietformulier">
            <?php
            foreach ($result as $key => $value) {
                echo '<div class="frietgerechten frietkeuzes' . $key . '">';

                foreach ($value as $key1 => $value2) {

                    if ($key1 == 'Productnaam') {
                        echo '<h2 id="naam' . $value['Id'] . '">' . $value2 . '</h2>';

                    } elseif ($key1 == 'Omschrijving') {

                        echo '<h4>' . $value2 . '</h4>';
                    } elseif ($key1 == 'Prijs') {

                        echo '<h4 id="waarde' . $value['Id'] . '">' . $value2 . '</h4>';
                    } elseif ($key1 == 'img') {

                        echo '<img class="frietimg" src="' . $value2 . '"/>';
                    }

                }
                echo '<img class="snack" src="assets/img/plus.png" onclick="winkelwagen(' . $value['Id'] . ')" id="addorder' . $value['Id'] . '">';
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
            <div class="bestelmandjealles">
                <div class="bestellingsmandje" id="bestelmandje"></div>
                <div class="totaalprijs">Totaalprijs: <span id="totaalprijs">0.00</span></div>


                <script>
                    function winkelwagen(productId) {
                        // Voeg het product toe aan het winkelmandje
                        var productNaam = document.getElementById('naam' + productId).innerText;
                        var productPrijs = parseFloat(document.getElementById('waarde' + productId).innerText);

                        // Bereken de totaalprijs
                        var totaalprijs = parseFloat(document.getElementById('totaalprijs').innerText);
                        totaalprijs += productPrijs;

                        // Maak een nieuw item aan voor het geselecteerde product
                        var nieuwItem = '<div>' + productNaam+ '</div>';

                        // Voeg het nieuwe item toe binnen de div "bestelmandje"
                        var bestelmandje = document.getElementById('bestelmandje');
                        bestelmandje.innerHTML += nieuwItem;

                        // Update de totaalprijs binnen de div "bestelmandje"
                        document.getElementById('totaalprijs').innerText = totaalprijs.toFixed(2);
                    }



                </script>

            </div>

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