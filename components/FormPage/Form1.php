<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../LoginPage/Login.php");
    exit;
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
            <input type="hidden" name="fileName" value="<?= $_SESSION["user"] ?>">
            <input type="hidden" name="nextForm" value="Form2.php">
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