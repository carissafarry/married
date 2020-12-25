<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ./LoginPage/Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Done.css">
    <link rel="stylesheet" href="./Navbar/Navbar.css">
</head>

<body>
    <?php include './Navbar/Navbar.php'; ?>
    <div class="done-container">
        <div class="main-done">
            <h1 class="caption">Data Anda Telah Teregistrasi!</h1>
            <h2>Terima kasih telah menggunakan layanan Married!</h2>
            <div class="logout-btn">
                <a class="backBtn" href="./Logout.php">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>