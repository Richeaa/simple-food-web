<?php

$conn = mysqli_connect('localhost', 'root', '', 'mis');

$result = mysqli_query($conn, 'SELECT * FROM recommendation');


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
            <div class="table1">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Food Recommendation</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($result as $rekomendasi) {
                        echo "<tr>";
                        echo "<td>" . $rekomendasi['recommend_id'] . "</td>";
                        echo "<td>" . $rekomendasi['name'] . "</td>";
                        echo "<td>" . $rekomendasi['recommendation'] . "</td>";
                        echo "<td>" . $rekomendasi['city'] . "</td>";
                        echo "<td class = 'action'>
                    <a id = 'subfile' href ='updaterecommendation.php?recommend_id=" . $rekomendasi["recommend_id"] . "&name=" . $rekomendasi["name"] . "&recommendation=" . $rekomendasi["recommendation"] . "&city=" . $rekomendasi["city"] . "'>Update</a>
                    <a id = 'subfile2' href ='deleterecommendation.php?recommend_id=" . $rekomendasi["recommend_id"] . "'>Delete</a>
                    </td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="bawah">
            <div class="bawah1">
            </div>
            <div class="bawah2">
                <a href="addrekomendasi.php"><i class="ri-add-circle-fill"></i></a>
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