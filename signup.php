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
        <h1>Account aanmaken</h1>
        <form class="toevoegen" action="databasecalls/signupfile.php" method="post">
            <div class="toevoegenknop">
                <label id="teksttoevoegen">Gebruikersnaam:</label>

                <input id="invultoevoeg" type="text" name="Gebruikersnaam">
            </div>
            <div>
                <label id="teksttoevoegen">Wachtwoord:</label>

                <input id="invultoevoeg" type="password" name="Wachtwoord">
            </div>
            <div>
                <label id="teksttoevoegen">E-mail:</label>

                <input id="invultoevoeg" type="text" name="email">
            </div>



            <input id="opslaantoevoegen" type="submit" value="opslaan">


        </form>
    </section>
</main>
<?php
include('footer.php')
?>
</body>
</html>