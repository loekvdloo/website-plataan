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

        <section class="frietformulier1">

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
</main>
<?php
include('footer.php')
?>
</body>
</html>