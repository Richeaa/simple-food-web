<?php

$conn = mysqli_connect('localhost', 'root', '', 'mis');

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert ('Username Already Registered');</script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>alert('Confirmation password doesn\\'t match !');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);


    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    header("Location: login.php");
    exit();
}

if (isset($_POST["register"])) {

    if (registrasi($_POST) === false) {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="mis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="center">
        <div class="center2">
            <div class="center3">
            </div>
            <div class="center4">
                <div class="center5">
                    <form action='' method='POST' class="myform">
                        <i class="fas fa-user"></i>
                        <label for='username'>Username</label><br>
                        <input type='text' name='username' id='username' class='myform2' required>
                        <br><br>
                        <i class="fas fa-lock"></i>
                        <label for='password'>Password</label><br>
                        <input type='password' name='password' id='password' class='myform2' required>
                        <br><br>
                        <i class="fas fa-lock"></i>
                        <label for='password2'>Confirm Password</label><br>
                        <input type='password' name='password2' id='password2' class='myform2' required>
                        <br><br><br>
                        <input type='submit' name='register' value="Register" class='myform3'>
                    </form>
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
        </div>
    </div>


    <?php
    mysqli_close($conn);
    ?>
</body>

</html>