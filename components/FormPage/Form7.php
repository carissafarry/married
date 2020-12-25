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
    <title>Form Model N7</title>

    <style>
        body {
            background: white;
        }
    </style>
</head>

<body>
    <?php include '../Navbar/Navbar.php'; ?>
    <div class="form1-container">
        <div class="title-form">
            <h1>Formulir Model N7</h1>
        </div>
        <form action="../FormPage/recipients/formN7.php" method="POST">
            <input type="hidden" name="fileName" value="<?= $_SESSION["user"] ?>">
            <input type="hidden" name="nextForm" value="Done.php">
            <?php include './mainForm/mainForm7a.php'; ?>
            <div class="hr">
                <hr>
            </div>
            <?php include './mainForm/mainForm7b.php'; ?>
            <div class="hr">
                <hr>
            </div>
            <?php include './mainForm/mainForm7c.php'; ?>
            <div class="form1-btn">
                <a class="backBtn" href="./Form6.php">Kembali</a>
                <?php include './formBtn.php'; ?>
            </div>
        </form>
    </div>
</body>

</html>