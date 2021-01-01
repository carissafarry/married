<?php
$nomorN1 = "\$nomorN1 = " . '"' . $_POST["nomorN1"] . '"' . ";";
$kantorDesaN1 = "\$kantorDesaN1 = " . '"' . $_POST["kantorDesaN1"] . '"' . ";";
$kecamatanN1 = "\$kecamatanN1 = " . '"' . $_POST["kecamatanN1"] . '"' . ";";
$kotaN1 = "\$kotaN1 = " . '"' . $_POST["kotaN1"] . '"' . ";";
$namaN1 = "\$namaN1 = " . '"' . $_POST["namaN1"] . '"' . ";";
$genderN1 = "\$genderN1 = " . '"' . $_POST["genderN1"] . '"' . ";";
$ttlN1 = "\$ttlN1 = " . '"' . $_POST["ttlN1"] . '"' . ";";
$wargaNegaraN1 = "\$wargaNegaraN1 = " . '"' . $_POST["wargaNegaraN1"] . '"' . ";";
$agamaN1 = "\$agamaN1 = " . '"' . $_POST["agamaN1"] . '"' . ";";
$pekerjaanN1 = "\$pekerjaanN1 = " . '"' . $_POST["pekerjaanN1"] . '"' . ";";
$tempatTinggalN1 = "\$tempatTinggalN1 = " . '"' . $_POST["tempatTinggalN1"] . '"' . ";";
$nasabN1 = "\$nasabN1 = " . '"' . $_POST["nasabN1"] . '"' . ";";
$statusN1 = "\$statusN1 = " . '"' . $_POST["statusN1"] . '"' . ";";
$namaPasanganLamaN1 = "\$namaPasanganLamaN1 = " . '"' . $_POST["namaPasanganLamaN1"] . '"' . ";";
$fileName = $_POST["fileName"];
$nextForm = $_POST["nextForm"];

$text =
    $nomorN1 . " " .
    $kantorDesaN1 . " " .
    $kecamatanN1 . " " .
    $kotaN1 . " " .
    $namaN1 . " " .
    $genderN1 . " " .
    $ttlN1 . " " .
    $wargaNegaraN1 . " " .
    $agamaN1 . " " .
    $pekerjaanN1 . " " .
    $tempatTinggalN1 . " " .
    $nasabN1 . " " .
    $statusN1 . " " .
    $namaPasanganLamaN1;  // add all together 

$filepath = fopen('../../userData/' . $fileName . '.php', 'a'); // set filepath and fopen to new PHP-file
fwrite($filepath, $text); // write text as PHP-file
fclose($filepath); // close file

header('Location: ../' . $nextForm);
