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
<main>
    <form id="search-form">
        <input id="search" name="search" type="text" placeholder="Type here">
        <input id="submit" type="submit" value="Search">
    </form>

    <div id="search-results">
        <!-- Hier worden de zoekresultaten weergegeven -->
    </div>

    <script>
        // Voeg een event listener toe aan het zoekformulier
        document.getElementById("search-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Voorkom standaardgedrag van het formulier

            // Haal de zoekterm op uit het formulier
            var keyword = document.getElementById("search").value;

            // Maak een AJAX-verzoek aan om de zoekresultaten op te halen
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "zoeken.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Toon de zoekresultaten in de zoekresultaten div
                    document.getElementById("search-results").innerHTML = xhr.responseText;
                }
            };
            xhr.send("search=" + keyword);
        });
    </script>
</body>
</html>