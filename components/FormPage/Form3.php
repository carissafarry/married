<?php
require_once '../functions.php';
require_once './var/html/heallo.php';
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
            <h1>Formulir Persetujuan Mempelai (Model N3)</h1>
        </div>

        <div class="note">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</div>

        <form action="../FormPage/recipients/formN3.php" method="POST">
            <input type="hidden" name="fileName" value="heallo">
            <input type="hidden" name="nextForm" value="Form4.php">
            <div class="main-form2-container">
                <div class="main-form main-form2">
                    <div class="title-main-form">CALON SUAMI</div>
                    <?php include './mainForm/mainForm3a.php'; ?>
                </div>
                <div class="main-form main-form2">
                    <div class="title-main-form">CALON ISTRI</div>
                    <?php include './mainForm/mainForm3b.php'; ?>
                </div>
            </div>
            <div class="note">Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</div>

            <div class="note confirmation-form3">
                <p>Demikianlah, formulir ini dipenuhi dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</p>
            </div>

            <!-- Form BTN Submit -->
            <div class="form3-btn">
                <a class="backBtn" href="./Form2.php">Kembali</a>
                <?php include './formBtn.php'; ?>
            </div>
        </form>
    </div>
</body>

</html>