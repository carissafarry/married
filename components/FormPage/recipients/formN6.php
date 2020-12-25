<?php
$namaN6aMeninggal = "\$namaN6aMeninggal = " . '"' . $_POST["namaN6aMeninggal"] . '"' . ";";
$nasabN6aMeninggal = "\$nasabN6aMeninggal = " . '"' . $_POST["nasabN6aMeninggal"] . '"' . ";";
$ttlN6aMeninggal = "\$ttlN6aMeninggal = " . '"' . $_POST["ttlN6aMeninggal"] . '"' . ";";
$wargaNegaraN6aMeninggal = "\$wargaNegaraN6aMeninggal = " . '"' . $_POST["wargaNegaraN6aMeninggal"] . '"' . ";";
$agamaN6aMeninggal = "\$agamaN6aMeninggal = " . '"' . $_POST["agamaN6aMeninggal"] . '"' . ";";
$pekerjaanTerakhirN6aMeninggal = "\$pekerjaanTerakhirN6aMeninggal = " . '"' . $_POST["pekerjaanTerakhirN6aMeninggal"] . '"' . ";";
$tempatTinggalTerakhirN6aMeninggal = "\$tempatTinggalTerakhirN6aMeninggal = " . '"' . $_POST["tempatTinggalTerakhirN6aMeninggal"] . '"' . ";";
$tanggalN6aMeninggal = "\$tanggalN6aMeninggal = " . '"' . $_POST["tanggalN6aMeninggal"] . '"' . ";";
$tempatN6aMeninggal = "\$tempatN6aMeninggal = " . '"' . $_POST["tempatN6aMeninggal"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $namaN6aMeninggal . " " .
    $nasabN6aMeninggal . " " .
    $ttlN6aMeninggal . " " .
    $wargaNegaraN6aMeninggal . " " .
    $agamaN6aMeninggal . " " .
    $pekerjaanTerakhirN6aMeninggal . " " .
    $tempatTinggalTerakhirN6aMeninggal . " " .
    $tanggalN6aMeninggal . " " .
    $tempatN6aMeninggal; // add all together 

$filepath = fopen('../../userData/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
