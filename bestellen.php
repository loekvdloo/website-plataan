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


    $sql = "SELECT * FROM mainproduct";
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
    <div class="menu">
        <section class="frietformulier">
            <?php
            foreach ($result as $key => $value) {
                echo '<div class="frietgerechten frietkeuzes' . $key . '">';

                foreach ($value as $key1 => $value2) {

                    if ($key1 == 'product') {
                        echo '<h2>' . $value2 . '</h2>';
                        echo '<div class="bekijken bekijk' . $key . '">';
                        echo '<a href="menu' . $value2 . '.php" id="bekijkknop">Bekijk =></a>';
                        echo '</div>';

                    } elseif ($key1 == 'img') {

                        echo '<img class="menuimg" src="' . $value2 . '"/>';
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