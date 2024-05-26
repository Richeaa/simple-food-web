<?php

$conn = mysqli_connect('localhost', 'root', '', 'mis');


if (isset($_POST['b'])) {
    $email = $_POST['a'];


    $sql = "INSERT INTO information (email) VALUES ('$email');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert ('Data Added Successfully');</script>";
    }
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $lastname = $_POST['sec'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact VALUES ('$firstname', '$lastname', '$email', '$message');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert ('Thank You For Connect ! !');</script>";
    }
}

?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <title>Contact</title>
</head>

<body>

    <div class="container2">
        <div class="header">
            <img src="logo.png.png" class="img" alt="Logo" width="160" height="120">
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="update.php">Restaurant of The Week</a></li>
                <li><a href="option.php">Dining Options</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="recommendation.php">Recommendation</a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<li><a href='#'>" . $_SESSION['username'] . "</a><a href='logout.php'><i class='ri-logout-box-line'></i></a></li>";
                } else {
                    echo "<li><a href='login.php' class='login'><img src='user.png' class='img2' width='55' height='50'>Log In</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="tengah">
            <div class="subtengah">
                <h2 class="judul">Let's Connect</h2><br><br>
                <p class="subjudul">Hey, let's connect and catch up over a good foods sometime this week ! I'd love to hear what you've been up to lately.</p>
            </div>
        </div>
        <div class="tengah2">
            <div class="subtengah2">
                <div class="form-container">
                    <div class="form1">
                        <form action='' method='POST'>
                            <label for='first'>First Name *</label><br>
                            <input type='text' name='first' id='first' class='nama' required>
                    </div>
                    <div class="form2">
                        <label for='sec'>Last Name *</label><br>
                        <input type='text' name='sec' id='sec' class='nama' required>
                    </div>
                </div>
                <br>
                <div class="form-container2">
                    <label for='email'>Email *</label><br>
                    <input type='email' name='email' id='email' class='nama2' required><br>
                    <label for='message'>Message</label><br>
                    <input type='text' name='message' id='message' class='nama3' required>
                </div>
                <div class="form-container3">
                    <input type='submit' name='submit' value="Send" class='nama4'>
                    </form>
                </div>
            </div>
            <div class="subtengah3">
            </div>
            <div class="subtengah4">
                <div class="icon-container">
                    <div class="icon1">
                        <i class="ri-links-line"></i>
                        <br><br>
                        <h3 class="subicon">Address</h3><br>
                        <p class="isiicon">Jl. Movie Land, Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530</p>
                    </div>
                    <div class="icon2">
                        <i class="ri-phone-line"></i>
                        <br><br>
                        <h3 class="subicon">Phone</h3><br>
                        <p class="isiicon">+62 - 878 - 6592 - 9547</p>
                    </div>
                </div>
                <br>
                <div class="icon-container2">
                    <div class="icon3">
                        <i class="ri-mail-line"></i>
                        <br><br>
                        <h3 class="subicon">Email</h3><br>
                        <p class="isiicon">akulapar@gmail.com</p>
                    </div>
                    <div class="icon4">
                        <i class="ri-thumb-up-line"></i>
                        <br><br>
                        <h3 class="subicon">Follow</h3><br>
                        <div class="iconrow">
                            <i class="ri-facebook-fill"></i>
                            <i class="ri-twitter-fill"></i>
                            <i class="ri-instagram-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tengah3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.739434489127!2d107.1638896742837!3d-6.297931361637379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b3f5b98eead%3A0x9cd26868c5f5a71c!2sBeverly%20Hills!5e0!3m2!1sid!2sid!4v1712583554473!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer">
            <div class="part1">
                <div class="subpart1">
                    <h2 class="footer1">Newsletter</h2>
                    <br>
                    <p class="subp">
                        Stay up to date with all the latest <br>
                        from AkuLapar
                    </p>
                    <br>
                    <div class="email">
                        <form action="" method="POST" class="subemail">
                            <label for="email" style="color : rgb(225, 220, 220)">Email *</label><br><br>
                            <input type="email" name="a" id="email" class="inputemail" required>
                            <input type="submit" name="b" value="Join" class="inputsubmit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="subpart2">
                    <h2 class="footer1">Talk to Us</h2>
                    <br>
                    <p class="subp">
                        +62 878-6592-9547 <br>
                        akulapar@gmail.com <br><br>
                        Jl. Movie Land, Mekarmukti, Kec. <br>
                        Cikarang Utara, Kabupaten Bekasi, <br>
                        Jawa Barat 17530
                    </p>
                </div>
            </div>
            <div class="part3">
                <div class="subpart3">
                    <h2 class="footer2"><a href="https://www.instagram.com/akulapar.bro?igsh=NXVuNzdiM3RwY3hj" id="media">Instagram</a></h2>
                    <h2 class="footer2"><a href="https://www.facebook.com/akulapar.akulapar.50?mibextid=ZbWKwL" id="media">Facebook</a></h2>
                    <h2 class="footer2"><a href="https://x.com/akulapar_bro?t=UeC8kWrPdun28jbAt2Ck0g&s=09" id="media">Twitter</a></h2>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="copy">
                <p class="end">&copy; 2024 by AkuLapar</p>
            </div>
        </div>
    </div>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>