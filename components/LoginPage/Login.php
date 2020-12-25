<?php
session_start();
if (isset($_SESSION["user"])) {
    header('Location: ../FormPage/Form1.php');
    exit;
}
if (isset($_POST["login"])) {
    $notification = "
        <script>
        alert('Username atau password salah!');
        document.location.href = 'Login.php';
        </script>
    ";
    $username = $_POST["username"];
    $passwordInput = $_POST["password"];
    $userFile = '../userData/' . $username . '.php';
    if (file_exists($userFile)) {
        require_once($userFile);
        if ($password == $passwordInput) {
            $_SESSION["user"] = $username;
            header('Location: ../FormPage/Form1.php');
        } else {
            echo $notification;
        }
    } else {
        echo $notification;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./Login.css">
    <title>Married | Register</title>
</head>

<body>
    <div class='RegisterContainer'>
        <div class='container'>
            <div class='heading'>
                <h1>Married</h1>
                <h4>Login</h4>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="fileName" value="userData">
                <input type="hidden" name="nextForm" value="../done.php">
                <div class='user'>
                    <input type='text' name='username' placeholder='Username' required>
                </div>
                <div class='user'>
                    <input type='password' name='password' placeholder='Password' required>
                </div>
                <div class='button'>
                    <input type='submit' name='login' value='Log In'></input>
                </div>
            </form>
            <div class='help'>
                <h3>Don't have any account yet?<span><a href='../RegisterPage/Register.php' class='link'> Register</a></span></h3>
            </div>
            <div class='social'>
                <ul class='items'>
                    <li>
                        <h3 class='link'>G</h3>
                    </li>
                    <li>
                        <h3 class='link'>f</h3>
                    </li>
                    <li>
                        <h3 class='link'>t</h3>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>