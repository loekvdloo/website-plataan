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
    <form class="formulier" action="rekenmachine.php" method="post">
        <input type="text" name="getal1" placeholder="vul hier je eerste getal in">
        <a>x</a>
        <input type="text" name="getal2" placeholder="vul hier je tweede getal in in">
        <input type="submit" value="bereken">

</main>
<?php
include('footer.php')
?>
</body>
</html>