<?php
$tempatKUAN7a = "\$tempatKUAN7a = " . '"' . $_POST["tempatKUAN7a"] . '"' . ";";
$tglAwalNikahN7b = "\$tglAwalNikahN7b = " . '"' . $_POST["tglAwalNikahN7b"] . '"' . ";";
$tglAkhirNikahN7b = "\$tglAkhirNikahN7b = " . '"' . $_POST["tglAkhirNikahN7b"] . '"' . ";";
$hariN7b = "\$hariN7b = " . '"' . $_POST["hariN7b"] . '"' . ";";
$masKawinN7b = "\$masKawinN7b = " . '"' . $_POST["masKawinN7b"] . '"' . ";";
$dibayarN7b = "\$dibayarN7b = " . '"' . $_POST["dibayarN7b"] . '"' . ";";
$completed = $_POST["completed"];
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $tempatKUAN7a . " " .
    $tglAwalNikahN7b . " " .
    $tglAkhirNikahN7b . " " .
    $hariN7b . " " .
    $masKawinN7b . " " .
    $dibayarN7b; // add all together 

$filepath = fopen('../../userData/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../../' . $nextForm);
