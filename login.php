<?php
session_start();
$error = false;

$conn = mysqli_connect("localhost", "root", "", "mis");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        }
    }

    $error = true;
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="mis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="centersec">
        <div class="center2">
            <div class="center4">
                <div class="center10">
                    <form action='' method='POST' class="form">
                        <i class="fas fa-user"></i>
                        <label for='username'>Username</label><br>
                        <input type='text' name='username' id='username' class='myform2' required>
                        <br><br>
                        <i class="fas fa-lock"></i>
                        <label for='password'>Password</label><br>
                        <input type='password' name='password' id='password' class='myform2' required>
                        <br><br><br>
                        <input type='submit' name='login' value="Login" class='form3'>
                    </form>
                    <br>
                    <p class="subregister">Don't Have An Account ? <a href="register.php" id="lokasi">Sign Up</a></p>
                    <br>
                    <div class="center6">
                        <a href="index.php" id="kembali">
                            <div class="center7">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="center11">
            </div>
        </div>
    </div>

</body>

</html>