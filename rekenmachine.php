<?php

$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];


if ($_POST['getal1'] && $_POST['getal2']) {
    $result = ($getal1 * $getal2);
    echo $result;
} else {
    echo 'mag niet';
}

