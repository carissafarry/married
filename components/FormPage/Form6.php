<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../LoginPage/Login.php");
    exit;
}
require_once '../userData/' . $_SESSION["user"] . '.php';
$goToHomeDir = '../../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./Form.css">
    <link rel="stylesheet" href="../Navbar/Navbar.css">
    <title>Form Model N6</title>
</head>

<body>
    <?php include '../Navbar/Navbar.php'; ?>
    <div class="form1-container">
        <div class="title-form">
            <h1>Formulir Keterangan Kematian Suami / Istri (Model N6)</h1>
        </div>
        <?php include './formContainer.php'; ?>
        <div class="note">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</div>

        <form action="../FormPage/recipients/formN6.php" method="POST">
            <input type="hidden" name="fileName" value="<?= $_SESSION["user"] ?>">
            <input type="hidden" name="nextForm" value="Form7.php">
            <div class="main-form2-container">
                <div class="main-form main-form2">
                    <div class="title-main-form">FORMULIR 1</div>
                    <?php include './mainForm/mainForm6a.php'; ?>
                </div>
                <div class="main-form main-form2">
                    <div class="title-main-form">FORMULIR 2</div>
                    <?php include './mainForm/mainForm6b.php'; ?>
                    <!-- Form BTN Submit -->
                </div>
            </div>
            <div class="note confirmation-form3">
                <p>Demikianlah, formulir ini dipenuhi dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</p>
            </div>
            <div class="form3-btn">
                <a class="backBtn" href="./Form5.php">Kembali</a>
                <?php include './formBtn.php'; ?>
            </div>
        </form>
    </div>
</body>

</html>