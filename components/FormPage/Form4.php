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
            <h1>Formulir Keterangan Tentang Orang Tua (Model N4)</h1>
        </div>
        <?php include './formContainer.php'; ?>
        <div class="note">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</div>

        <form action="../FormPage/recipients/formN4.php" method="POST">
            <input type="hidden" name="fileName" value="heallo">
            <input type="hidden" name="nextForm" value="Form5.php">
            <!-- <div class="main-form2-container"> -->
            <div class="main-form main-form1">
                <div class="title-main-form">FORMULIR 1</div>
                <?php include './mainForm/mainForm4a.php'; ?>
            </div>
            <div class="main-form main-form1">
                <div class="title-main-form">FORMULIR 2</div>
                <?php include './mainForm/mainForm4b.php'; ?>
            </div>
            <div class="note confirmation-form3">
                <p>Demikianlah, formulir ini dipenuhi dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</p>
            </div>
            <!-- Form BTN Submit -->
            <div class="form4-btn">
                <a class="backBtn" href="./Form3.php">Kembali</a>
                <?php include './formBtn.php'; ?>
            </div>
            <!-- </div> -->
        </form>
    </div>
</body>

</html>