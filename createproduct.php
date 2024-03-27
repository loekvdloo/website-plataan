<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>plataan</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
</head>
<?php
//include('header.php')
//?>

<body>
<main>
    <form action="databasecalls/createproduct.php" method="post">
        <label>Productnaam:</label>

        <input type="text" name="Productnaam">
        <label>OMschrijving:</label>

        <input type="text" name="Omschrijving">
        <label>Prijs:</label>

        <input type="text" name="Prijs">
        <label>img url:</label>

        <input type="text" name="img">
        <label> categorie:</label>

        <input type="text" name=" categorie">

        <input type="submit">


    </form>
</main>
<?php
//include('footer.php')
//?>
</body>
</html>