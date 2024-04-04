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
<?php
include('Connection.php');


$sql = "SELECT * FROM producten ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


foreach ($result as $key => $value) {
    echo '<form action="databasecalls/updateproduct.php" method="post">';
    foreach ($value as $key1 => $value2) {

        if ($key1 == 'Id') {
            echo '<label>id:</label>';
            echo '<input readonly type="text" name="ind" value="' . $value2 . '"><br>';

        } elseif ($key1 == 'Productnaam') {

            echo '<label>Productnaam:</label>';
            echo '<input readonly type="text" name="productnaam" value="' . $value2 . '"><br>';
        } elseif ($key1 == 'Omschrijving') {

            echo '<label>Omschrijving:</label>';
            echo '<input type="text" name="omschrijving" value="' . $value2 . '"><br>';
        }


    }
    echo '<input type="submit">';
    echo '</form>';
}


?>

<body>
<main>

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