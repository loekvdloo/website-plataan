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

<body>
<main>
    <section class="homepagina">
        <?php
        include('loginscherm.php')
        ?>
        <div class="afbeblok">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">afhalen</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">bezorgen</button>
            </div>
            <div id="London" class="tabcontent">
                <form>
                    <h3>selecteer een tijd:</h3>
                    <input type="time" name="afhaaltijd" placeholder="afhaaltijd" id="invulafhaal">
                    <input type="submit" value="bestellen -->" id="bestellenhome">
                </form>
                <a href="menualgemeen.php">menu kaart bekijken</a>
            </div>
            <div id="Paris" class="tabcontent">
                <form>
                    <h3>Vul je postcode in:</h3>
                    <input type="text" name="postcode" placeholder="postcode" id="invulbestellen">
                    <input type="submit" value="bestellen --> " id="bestellenhome">
                </form>
                <a href="menualgemeen.php">menu kaart bekijken</a>
            </div>
        </div>
        <div class="homepage-img">
            <img src="assets/img/plataan-homepagina.png" alt="voorkantplataan" id="voorkantplataan">
        </div>

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>

    </section>
</main>
<?php
include('footer.php')
?>
</body>
</html>