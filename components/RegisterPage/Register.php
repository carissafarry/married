<?php
session_start();
if (isset($_SESSION["user"])) {
    header('Location: ../FormPage/Form1.php');
    exit;
}
if (isset($_POST["register"])) {
    $username = "\$username = " . '"' . $_POST["username"] . '"' . ";";
    $password = "\$password = " . '"' . $_POST["password"] . '"' . ";";
    $userFile = '../userData/' . $_POST["username"] . '.php';
    $notification = "
        <script>
        alert('Username atau password sudah pernah dibuat!');
        document.location.href = 'Register.php';
        </script>
    ";
    $notification2 = "
        <script>
        alert('Akun berhasil dibuat');
        document.location.href = '../LoginPage/Login.php';
        </script>
    ";

    if (file_exists($userFile)) {
        echo $notification;
    } else {
        $text =
            $username . " " .
            $password;

        extract($_REQUEST);
        $filepath = fopen('../userData/' . $username . '.php', 'w+');
        fwrite($filepath, '<?php ' . $text);
        fclose($filepath);
        echo $notification2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./Register.css">
    <title>Married | Register</title>
</head>

<body>
    <div class='RegisterContainer'>
        <div class='container'>
            <div class='heading'>
                <h1>Married</h1>
                <h4>Register</h4>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="nextForm" value="../done.php">
                <div class='user'>
                    <input type='text' name='username' placeholder='Username' required>
                </div>
                <div class='user'>
                    <input type='password' name='password' placeholder='Password' required>
                </div>
                <div class='button'>
                    <input type='submit' name='register' value='Register'></input>
                </div>
            </form>
            <div class='help'>
                <h3>Have an account?<span><a href='../LoginPage/Login.php' class='link'> Sign In</a></span></h3>
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