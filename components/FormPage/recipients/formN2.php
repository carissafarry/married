<?php
$namaN2aOrtu = "\$namaN2aOrtu = " . '"' . $_POST["namaN2aOrtu"] . '"' . ";";
$genderN2aOrtu = "\$genderN2aOrtu = " . '"' . $_POST["genderN2aOrtu"] . '"' . ";";
$ttlN2aOrtu = "\$ttlN2aOrtu = " . '"' . $_POST["ttlN2aOrtu"] . '"' . ";";
$wargaNegaraN2aOrtu = "\$wargaNegaraN2aOrtu = " . '"' . $_POST["wargaNegaraN2aOrtu"] . '"' . ";";
$agamaN2aOrtu = "\$agamaN2aOrtu = " . '"' . $_POST["agamaN2aOrtu"] . '"' . ";";
$pekerjaanN2aOrtu = "\$pekerjaanN2aOrtu = " . '"' . $_POST["pekerjaanN2aOrtu"] . '"' . ";";
$tempatTinggalN2aOrtu = "\$tempatTinggalN2aOrtu = " . '"' . $_POST["tempatTinggalN2aOrtu"] . '"' . ";";
$tempatTinggalWanitaN2b = "\$tempatTinggalWanitaN2b = " . '"' . $_POST["tempatTinggalWanitaN2b"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $namaN2aOrtu . " " .
    $genderN2aOrtu . " " .
    $ttlN2aOrtu . " " .
    $wargaNegaraN2aOrtu . " " .
    $agamaN2aOrtu . " " .
    $pekerjaanN2aOrtu . " " .
    $tempatTinggalN2aOrtu . " " .
    $tempatTinggalWanitaN2b; // add all together 

$filepath = fopen('../var/html/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
