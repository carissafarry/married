<?php
require_once '../functions.php';
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
            <h1>Formulir Keterangan untuk Nikah (Model N1)</h1>
        </div>
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