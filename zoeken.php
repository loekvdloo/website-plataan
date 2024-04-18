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

    $sql = "SELECT * FROM producten WHERE categorie = 'friet' ";
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
        <a id="knopbestellen"> Jouw bestelling</a>
        <img src="assets/img/cart%201.png">
    </section>
    <?php
    session_start();
    ?>
    <form id="search-form" action="databasecalls/zoeken.php">
        <input id="search" name="search" type="text" placeholder="Type here">
        <input id="submit" type="submit" value="zoeken">
    </form>

    <div id="search-results">
        <!-- Hier worden de zoekresultaten weergegeven -->
    </div>

    <script>
        // Voeg een event listener toe aan het zoekformulier
        document.getElementById("search-form").addEventListener("submit", function (event) {
            event.preventDefault(); // Voorkom standaardgedrag van het formulier

            // Haal de zoekterm op uit het formulier
            var keyword = document.getElementById("search").value;

            // Maak een AJAX-verzoek aan om de zoekresultaten op te halen
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "databasecalls/zoeken.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Toon de zoekresultaten in de zoekresultaten div
                    document.getElementById("search-results").innerHTML = xhr.responseText;
                }

            };
            xhr.send("search=" + keyword);
        });
    </script>
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



