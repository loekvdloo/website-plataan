<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>plataan</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
</head><?php
include('header.php')
?>

<body>
<main>
    <section class="homepagina">
        <div class="afbeblok">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">afhalen</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">bezorgen</button>

            </div>

            <div id="London" class="tabcontent">
                <form>
                    <h3>selecteer een tijd:</h3>
                    <input type="time" name="afhaaltijd" placeholder="afhaaltijd" id="invulhome">
                    <input type="submit"  value="bestellen" id="bestellenhome">
                </form>
                <a href="menu.php">menu kaart bekijken</a>
            </div>

            <div id="Paris" class="tabcontent">
                <form>
                    <h3>Vul je postcode in:</h3>
                    <input type="text" name="postcode" placeholder="postcode" id="invulhome">
                    <input type="submit" value="bestellen " id="bestellenhome">
                </form>
                <a href="menu.php">menu kaart bekijken</a>
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

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
    </section>
</main>
<?php
include('footer.php')
?>
</body>
</html>
<!--<div class="homepage-img">-->
<!--    <img src="assets/img/plataan-homepagina.png" alt="voorkantplataan" id="voorkantplataan">-->
<!--</div>-->
<!--</html>-->
<!--<main>-->

<!--        <div class="bestellenhome">-->
<!--            <div class="afbe">-->
<!--                <div class="bezorgenhome" id="afhalen" onclick="switchToAfhalen(this)">-->
<!--                    <h3>afhalen</h3>-->
<!--                </div>-->
<!--                <div class="bezorgenhome" id="bezorgen" onclick="switchToBezorgen(this)">-->
<!--                    <h3>bezorgen</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="grootblokhome" id="bezorgscherm">-->
<!--                <form>-->
<!--                    <h3>Vul je postcode in:</h3>-->
<!--                    <input type="text" name="postcode" placeholder="postcode" id="invulhome">-->
<!--                    <input type="submit" value="bestellen " id="bestellenhome" onclick="changeColor(this)">-->
<!--                </form>-->
<!--                <a>menu kaart bekijken</a>-->
<!--            </div>-->
<!--            <div class="grootblokhome" id="afhaalscherm">-->
<!--                <form>-->
<!--                    <h3>Vul je postcode in:</h3>-->
<!--                    <input type="text" name="afhaaltijd" placeholder="afhaaltijd" id="invulhome">-->
<!--                          <input type="submit" value="bestellen" id="bestellenhome" onclick="changeColor(this)">-->
<!--                </form>-->
<!--                <a href="menu.php">menu kaart bekijken</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="afbepgainga">-->



