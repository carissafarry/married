<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../LoginPage/Login.php");
    exit;
}
require_once '../userData/' . $_SESSION["user"] . '.php';
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
            <h1>Formulir Keterangan Asal Usul (Model N2)</h1>
        </div>
        <form action="../FormPage/recipients/formN2.php" method="POST">
            <input type="hidden" name="fileName" value="<?= $_SESSION["user"] ?>">
            <input type="hidden" name="nextForm" value="Form3.php">
            <?php include './formContainer.php'; ?>
            <div class="note">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</div>
            <div class="main-form2-container">
                <div class="main-form main-form2">
                    <div class="title-main-form">FORMULIR</div>
                    <?php include './mainForm/mainForm2a.php'; ?>
                </div>
                <div class="main-form main-form2">
                    <div class="note yellowBg" style="margin: 16px;">Adalah benar ayah kandung dan ibu kandung dari seorang:</div>
                    <?php include './mainForm/mainForm2b.php'; ?>
                    <div class="form2-btn">
                        <a class="backBtn" href="./Form1.php">Kembali</a>
                        <?php include './formBtn.php'; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>