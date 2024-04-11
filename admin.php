<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['rol'] == 'admin') {

?>
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
    <div>
        <a class="productverwijder" href="adminmenu.php">product verwijder</a>
    </div>
    <section class="toevoegenkop">
        <h1>Product toevoegen</h1>
        <form class="toevoegen" action="databasecalls/createproduct.php" method="post">
            <div class="toevoegenknop">
                <label id="teksttoevoegen">Productnaam:</label>

                <input id="invultoevoeg" type="text" name="Productnaam">
            </div>
            <div>
                <label id="teksttoevoegen">Omschrijving:</label>

                <input id="invultoevoeg" type="text" name="Omschrijving">
            </div>
            <div>
                <label id="teksttoevoegen">Prijs:</label>

                <input id="invultoevoeg" type="text" name="Prijs">
            </div>
            <div>
                <label id="teksttoevoegen">img url:</label>

                <input id="invultoevoeg" type="text" name="img">
            </div>
            <div>
                <label id="teksttoevoegen"> categorie:</label>

                <input id="invultoevoeg" type="text" name=" categorie">
            </div>


            <input id="opslaantoevoegen" type="submit" value="opslaan">


        </form>
    </section>
    <?php
    include('Connection.php');

    $sql = "SELECT * FROM producten ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    echo '<section class="toevoegenkop">';
    echo '<h1>Product aanpassen</h1>';
    echo '<div class="veranderen">';
    foreach ($result as $key => $value) {
        echo '<form class="toevoegen"  action="databasecalls/updateproduct.php" method="post">';

        foreach ($value as $key1 => $value2) {

            if ($key1 == 'Id') {
                echo '<label id="teksttoevoegen">id:</label>';
                echo '<input id="invultoevoeg" readonly type="text" name="ind" value="' . $value2 . '"><br>';

            } elseif ($key1 == 'Productnaam') {

                echo '<label id="teksttoevoegen">Productnaam:</label>';
                echo '<input id="invultoevoeg" readonly type="text" name="productnaam" value="' . $value2 . '"><br>';
            } elseif ($key1 == 'Omschrijving') {

                echo '<label id="teksttoevoegen">Omschrijving:</label>';
                echo '<input id="invultoevoeg" type="text" name="omschrijving" value="' . $value2 . '"><br>';
            }

        }
        echo '<input type="submit" id="opslaantoevoegen" value="opslaan">';
        echo '</form>';
    }
    echo '</div>';
    echo '</section>';

    ?>
</main>
<?php
include('footer.php')
?>
</body>
</html>
<?php
}else{
header('location:index.php');
}

session_destroy();
?>