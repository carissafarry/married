<?php
$namaN4bOrtu2 = "\$namaN4bOrtu2 = " . '"' . $_POST["namaN4bOrtu2"] . '"' . ";";
$ttlN4bOrtu2 = "\$ttlN4bOrtu2 = " . '"' . $_POST["ttlN4bOrtu2"] . '"' . ";";
$wargaNegaraN4bOrtu2 = "\$wargaNegaraN4bOrtu2 = " . '"' . $_POST["wargaNegaraN4bOrtu2"] . '"' . ";";
$agamaN4bOrtu2 = "\$agamaN4bOrtu2 = " . '"' . $_POST["agamaN4bOrtu2"] . '"' . ";";
$pekerjaanN4bOrtu2 = "\$pekerjaanN4bOrtu2 = " . '"' . $_POST["pekerjaanN4bOrtu2"] . '"' . ";";
$tempatTinggalN4bOrtu2 = "\$tempatTinggalN4bOrtu2 = " . '"' . $_POST["tempatTinggalN4bOrtu2"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $namaN4bOrtu2 . " " .
    $ttlN4bOrtu2 . " " .
    $wargaNegaraN4bOrtu2 . " " .
    $agamaN4bOrtu2 . " " .
    $pekerjaanN4bOrtu2 . " " .
    $tempatTinggalN4bOrtu2; // add all together 

$filepath = fopen('../var/html/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
