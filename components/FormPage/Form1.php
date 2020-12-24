<?php
require_once '../functions.php';

if (isset($_POST["next"])) {
    // if (ModelN1($_POST) > 0) {
    // }
    // $namaN1 = $_POST["namaN1"];
    // $genderN1 = $_POST["genderN1"];
    // $ttlN1 = $_POST["ttlN1"];
    // $wargaNegaraN1 = $_POST["wargaNegaraN1"];
    // $agamaN1 = $_POST["agamaN1"];
    // $pekerjaanN1 = $_POST["pekerjaanN1"];
    // $tempatTinggalN1 = $_POST["tempatTinggalN1"];
    // $nasabN1 = $_POST["nasabN1"];
    // $statusN1 = $_POST["statusN1"];
    // $namaPasanganLamaN1 = $_POST["namaPasanganLamaN1"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./Form.css">
    <link rel="stylesheet" href="../Navbar/Navbar.css">
    <title>Document</title>
</head>

<body>
    <?php include '../Navbar/Navbar.php'; ?>
    <div class="form1-container">
        <div class="title-form">
            <h1>Formulir Keterangan untuk Nikah (Model N1)</h1>
        </div>
        <form action="./recipients/formN1.php" method="POST">
            <?php include './formContainer1.php'; ?>
            <div class="note">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</div>

            <div class="main-form">
                <?php include './mainForm/mainForm1.php'; ?>
                <div class="form1-btn">
                    <a class="backBtn" href="./Form1.php">Kembali</a>
                    <?php include './formBtn.php'; ?>
                </div>
        </form>
    </div>
    </div>
</body>

</html>