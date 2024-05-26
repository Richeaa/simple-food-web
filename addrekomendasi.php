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
    <title>AkuLapar</title>
</head>

<body>

    <div class="container">
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
        <div class="top-recommendation">
            <div class="rekomendasi1">
                <h3 class="judul-rekomendasi">Recommendation</h3><br><br>
                <p class="teks-rekomendasi">Each of your recommendations is an opportunity to discover great flavors to enjoy with our community.</p>
            </div>
        </div>
        <div class="main-table">
            <div class="table2">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $recommendation = $_POST['recommendation'];
                    $city = $_POST['city'];

                    $sql = "INSERT INTO recommendation VALUES ('', '$name', '$recommendation', '$city');";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        header("Location: recommendation.php");
                        exit();
                    }
                }
                ?>
                <form action='' method='POST' class="form5">
                    <label for='name'>Name</label><br>
                    <input type='text' name='name' id='name' required>
                    <br>
                    <label for='recomendation'>Recommendation</label><br>
                    <input type='text' name='recommendation' id='recommendation' required>
                    <br>
                    <label for='city'>City</label><br>
                    <input type='text' name='city' id='city' required>
                    <br><br>
                    <input type='submit' name='submit' value="Add Recommendation" class='addrecommendation'>
                </form>
            </div>
        </div>
        <div class="bawah3">
            <div class="bawah4">
            </div>
            <div class="bawah5">
                <a href="recommendation.php"><i class="ri-arrow-left-circle-fill"></i></a>
            </div>
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