
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
    <?php
    include('loginscherm.php')
    ?>
    <section class="toevoegenkop">
        <h1>contact</h1>
        <form class="toevoegen" action="databasecalls/contact.php" method="post">
            <div class="toevoegenknop">
                <label id="teksttoevoegen">Voornaam:</label>

                <input id="invultoevoeg" type="text" name="naam">
            </div>
            <div>
                <label id="teksttoevoegen">Achternaam:</label>

                <input id="invultoevoeg" type="text" name="achternaam">
            </div>
            <div>
                <label id="teksttoevoegen">E-Mail:</label>

                <input id="invultoevoeg" type="text" name="mail">
            </div>
            <div>
                <label id="teksttoevoegen">opmerking:</label>

                <input id="invultoevoeg" type="text" name="opmerking">
            </div>


            <input id="opslaantoevoegen" type="submit" value="versturen">


        </form>
    </section>
</main>


<?php
include('footer.php')
?>
</body>
</html>