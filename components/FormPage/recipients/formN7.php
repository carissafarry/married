<?php
$tempatKUAN7a = "\$tempatKUAN7a = " . '"' . $_POST["tempatKUAN7a"] . '"' . ";";
$tglAwalNikahN7b = "\$tglAwalNikahN7b = " . '"' . $_POST["tglAwalNikahN7b"] . '"' . ";";
$tglAkhirNikahN7b = "\$tglAkhirNikahN7b = " . '"' . $_POST["tglAkhirNikahN7b"] . '"' . ";";
$hariN7b = "\$hariN7b = " . '"' . $_POST["hariN7b"] . '"' . ";";
$masKawinN7b = "\$masKawinN7b = " . '"' . $_POST["masKawinN7b"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $tempatKUAN7a . " " .
    $tglAwalNikahN7b . " " .
    $tglAkhirNikahN7b . " " .
    $hariN7b . " " .
    $masKawinN7b; // add all together 

$filepath = fopen('../var/html/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
