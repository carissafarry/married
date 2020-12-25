<?php
$namaN3a = "\$namaN3a = " . '"' . $_POST["namaN3a"] . '"' . ";";
$nasabN3a = "\$nasabN3a = " . '"' . $_POST["nasabN3a"] . '"' . ";";
$ttlN3a = "\$ttlN3a = " . '"' . $_POST["ttlN3a"] . '"' . ";";
$wargaNegaraN3a = "\$wargaNegaraN3a = " . '"' . $_POST["wargaNegaraN3a"] . '"' . ";";
$agamaN3a = "\$agamaN3a = " . '"' . $_POST["agamaN3a"] . '"' . ";";
$pekerjaanN3a = "\$pekerjaanN3a = " . '"' . $_POST["pekerjaanN3a"] . '"' . ";";
$tempatTinggalN3a = "\$tempatTinggalN3a = " . '"' . $_POST["tempatTinggalN3a"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $namaN3a . " " .
    $nasabN3a . " " .
    $ttlN3a . " " .
    $wargaNegaraN3a . " " .
    $agamaN3a . " " .
    $pekerjaanN3a . " " .
    $tempatTinggalN3a; // add all together 

$filepath = fopen('../../userData/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
