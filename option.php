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
    <title>Dining Options</title>
    <link rel="stylesheet" href="mis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="../mis/swiper-bundle.min.css">
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
        <div class="gambar1">
            <div class="subgambar1">
                <div class="subgambar2">
                    <h2 class="kultur">Culture Indonesia</h2>
                    <p class="subkultur">Indonesian Food: Spices, Cooking Techniques, and Cultural Diversity.</p>
                </div>
            </div>
        </div>
        <div class="inti1">
            <p class="kota">Palembang</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam1">
                        <p class="tulisan">The Forest Cafe & Resto</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Seduduk Putih Nomor 138, 8 Ilir, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam2">
                        <p class="tulisan">Kampung Kecil</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Kemang Manis No.340, Kemang Manis, Kec. Ilir Bar. II, Kota Palembang, Sumatera Selatan 30144</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam3">
                        <p class="tulisan">Pondok Pinang Umak</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Demang Lebar Daun, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam4">
                        <p class="tulisan">Warung Terapung Mbok War</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Ps. 16 Ilir, 16 Ilir, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30111</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam5">
                        <p class="tulisan">Pempek Candy</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jend. Sudirman No. 149/8, Sungai Pangeran, Kec. Ilir Tim, I, Kota Palembang</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam6">
                        <p class="tulisan">Mie Celor</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Demang Lebar Daun No.41, Lorok Pakjo, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30151</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam7">
                        <p class="tulisan">Sarinande Tempo Doeloe</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Mayor Ruslan No.966, 20 Ilir D. I, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30114</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam8">
                        <p class="tulisan">Bakmi Babi Aloi</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Dempo Luar No.410A, 15 Ilir, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30111</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam9">
                        <p class="tulisan">Sate Wak Din</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. KH. Azhari, 7 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30111</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam10">
                        <p class="tulisan">Sop Jamur</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Ketapang No.4 No. 372, Sialang, Kec. Sako, Kota Palembang, Sumatera Selatan 30163</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Yogyakarta</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam11">
                        <p class="tulisan">Gudeg Yu Djum Wijilan</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Wijilan No. 31</p>
                        <br><br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam12">
                        <p class="tulisan">The House Of Raminten</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Faridan M Noto No.7, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam13">
                        <p class="tulisan">Mangut Lele Mbah Marto</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Parangtritis No.KM. 4 5, Panjangjiwo, Patalan, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam14">
                        <p class="tulisan">Tengkleng Gajah Jogja</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Kaliurang No.Km.9, RT.04/RW.3, Gantalan, Minomartani, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam15">
                        <p class="tulisan">Oseng Mercon Bu Narti</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. KH. Ahmad Dahlan No.107, Notoprajan, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55262</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam16">
                        <p class="tulisan">Bale Ayu Giwangan</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Imogiri Tim. No.KM 6, Nglebeng, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam17">
                        <p class="tulisan">Bakmi Jowo Mbah Gito</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Nyi Ageng Nis No.9, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam18">
                        <p class="tulisan">Banyu Mili Resto</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Nusa Indah, Kwarasan, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55592</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam19">
                        <p class="tulisan">Warung Soto Kadipiro</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Wates No.33, Kdipiro, Ngestiharjo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55182</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam20">
                        <p class="tulisan">Saoto Bathok Mbah Katro</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">6CQW+JRF, Sambisari, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="inti1">
            <p class="kota">Bali</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam21">
                        <p class="tulisan">Kepitu Restaurant</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Banjar Kepitu The Kayon Resort, Ubud 80571 Indonesia</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam22">
                        <p class="tulisan">Made's Warung</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Raya Seminyak, Seminyak, Kuta, Jl. Raya Seminyak No.7, Seminyak, Kec. Kuta, Kabupaten Badung, Bali 80361</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam23">
                        <p class="tulisan">Koral Restaurant</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Raya Nusa Dua Selatan, Sawangan, Nusa Dua, Kabupaten Badung, Bali</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam24">
                        <p class="tulisan">Ayam Betutu</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Balai Pustaka No.25, RT.1/RW.9, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam25">
                        <p class="tulisan">Bebek Bengil</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Hanoman, Ubud, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam26">
                        <p class="tulisan">Nasi Jinggo Diponegoro</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jalan Diponegoro Nomor 99, Kecamatan Denpasar Barat, Denpasar, Bali</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam27">
                        <p class="tulisan">Babi Guling Karya Rebo</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Toyaning No.1, Kedonganan, Kec. Kuta, Kabupaten Badung, Bali 80361</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam28">
                        <p class="tulisan">Babi Guling Pak Malen</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Sunset Road No.554, Seminyak, Kec. Kuta, Kabupaten Badung, Bali 80361</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam29">
                        <p class="tulisan">Warung Belayag Dek Ani</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Diponegoro Gang Batu Aya, Karangasem, Kec. Karangasem, Kabupaten Karangasem, Bali 80811</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam30">
                        <p class="tulisan">Bakso Pak Rebo</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Bypass Ngurah Rai No.444, Sanur Kauh, Denpasar Selatan, Kota Denpasar, Bali 80227</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Makassar</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam31">
                        <p class="tulisan">Coto Nusantara</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Nusantara Baru No.86, Pattunuang, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90173</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam32">
                        <p class="tulisan">Warung Pangkep Sop Saudara</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Dr. Wahidin Sudirohusodo No.40, Pattunuang, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90171</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam33">
                        <p class="tulisan">Konro Bakar Makassar</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. G. Bawakaraeng No.3, Pisang Utara, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90115</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam34">
                        <p class="tulisan">Sop Konro Bawakaraeng</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. G. Bawakaraeng No.105, Wajo Baru, Kec. Makassar, Kota Makassar, Sulawesi Selatan 90151</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam35">
                        <p class="tulisan">Warung Pallumara Mappanyukki</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. A. Mappanyukki No.15, Kunjung Mae, Kec. Mariso, Kota Makassar, Sulawesi Selatan 90113</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam36">
                        <p class="tulisan">Pallubasa Serigala</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Serigala No.54, Mamajang Dalam, Kec. Mamajang, Kota Makassar, Sulawesi Selatan 90132</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam37">
                        <p class="tulisan">Pisang Epe</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Maipa No.5, Losari, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90112</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam38">
                        <p class="tulisan">Rumah Makan & Seafood Losari</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Lamaddukelleng No.30, Losari, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90115</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam39">
                        <p class="tulisan">Rumah Makan Ujung Pandang</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Dr. Wahidin Sudirohusodo No.42, Pattunuang, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90174</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam40">
                        <p class="tulisan">RM. Apong</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Diponegoro No.124, Melayu, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90157</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Medan</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam41">
                        <p class="tulisan">Ucok Durian Medan</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. K.H. Wahid Hasyim No.30-32, Babura, Kec. Medan Baru, Kota Medan, Sumatera Utara 20153</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam42">
                        <p class="tulisan">Lontong Kak Lin</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Teuku Cik Ditiro No.8m, Madras Hulu, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20151</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam43">
                        <p class="tulisan">Rumah Makan Sinar Pagi</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Sei Deli No.2D/1, Silalas, Kec. Medan Bar., Kota Medan, Sumatera Utara 20236</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam44">
                        <p class="tulisan">Sate Memeng Setia Budi</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Chrysant V/ 2 No.13, Tj. Rejo, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20154</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam45">
                        <p class="tulisan">Bakso & Miesop methodist</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Hang Tuah No.17, Madras Hulu, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20151</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam46">
                        <p class="tulisan">Wajir Seafood</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Kol. Sugiono No.31, A U R, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20212</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam47">
                        <p class="tulisan">Mie Aceh Titi Bobrok</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Setia Budi No.17 D, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20122</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam48">
                        <p class="tulisan">Papa Kerang Rebus</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Bambu II Jl. Gunung Krakatau, Durian, Kec. Medan Tim., Kota Medan, Sumatera Utara 20236</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam49">
                        <p class="tulisan">Nasi Goreng Pattaya</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Brigjend Katamso No.253e, Kp. Baru, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20215</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam50">
                        <p class="tulisan">Nasi Gurih Tenda Biru</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. KL. Yos Sudarso No.9F, Glugur Kota, Kec. Medan Bar., Kota Medan, Sumatera Utara 20235</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Surabaya</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam51">
                        <p class="tulisan">Rawon Kalkulator</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Raya Darmo, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam52">
                        <p class="tulisan">Nasi Bebek Tugu Pahlawan</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Pasar Turi No.27-C, RT.006/RW.-09, Bubutan, Kec. Bubutan, Surabaya, Jawa Timur 17960</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam53">
                        <p class="tulisan">Imood</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Gubeng Kertajaya IX Raya No.40-A, Airlangga, Kec. Gubeng, Surabaya, Jawa Timur 60286</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam54">
                        <p class="tulisan">Depot Cak Win</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Gubeng Kertajaya VII Raya No.70, Airlangga, Kec. Gubeng, Surabaya, Jawa Timur 60286</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam55">
                        <p class="tulisan">Nasi Goreng Sempal</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Karang Menjangan No.77, Mojo, Kec. Gubeng, Surabaya, Jawa Timur 60286</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam56">
                        <p class="tulisan">Nasi Pecel Rawon Pucang Moroseneng</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Pucang Anom No.17, Pucang Sewu, Kec. Gubeng, Surabaya, Jawa Timur 60283</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam57">
                        <p class="tulisan">Sego Sambel Mak Yeye</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jagir Wonokromo Wetan No.10, Jagir, Kec. Wonokromo, Surabaya, Jawa Timur 60244</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam58">
                        <p class="tulisan">Bebek Dinoyo</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Dinoyo, Keputran, Kec. Tegalsari, Surabaya, Jawa Timur 60265</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam59">
                        <p class="tulisan">Warung Tempe Penyet Mbak Noer</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jagir Wonokromo No.120, Jagir, Kec. Wonokromo, Surabaya, Jawa Timur 60244</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam60">
                        <p class="tulisan">Warung Bu Kris</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. KH Abdul Wahab Siamin Surabaya Blok RO No.1, Dukuh Pakis, Kec. Dukuhpakis, Surabaya, Jawa Timur 60225</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Manado</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam61">
                        <p class="tulisan">Nasi Kuning Selamat Pagi Kampung Kodo</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl Sudirman 2 No.25 Kp Kodo I Disamping, Lawangirung, Kec. Wenang, Kota Manado, Sulawesi Utara 95123</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam62">
                        <p class="tulisan">RM. Ikan Bakar Selera Laut</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Ahmad Yani No.17, Sario Tumpaan, Kec. Sario, Kota Manado, Sulawesi Utara</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam63">
                        <p class="tulisan">Dabu Dabu Lemong Restaurant</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Boulevard II, Bitung Karangria, Kec. Tuminting, Kota Manado, Sulawesi Utara 95239</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam64">
                        <p class="tulisan">RM Bakar Rica</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Balaikota, Komo Luar, Kec. Wenang, Kota Manado, Sulawesi Utara</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam65">
                        <p class="tulisan">Raja Sate BBQ</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Piere Tendean, Titiwungan Utara, Kec. Sario, Kota Manado, Sulawesi Utara</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam66">
                        <p class="tulisan">RM Mega Rasa</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">FRPM+7F2, Wenang Sel., Kota Manado, Sulawesi Utara</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam67">
                        <p class="tulisan">Ikan Bakar Kinamang</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Ahmad Yani No.2, Tj. Batu, Kec. Sario, Kota Manado, Sulawesi Utara 95117</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam68">
                        <p class="tulisan">RM Ikan Bakar Sari Laut</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Boulevard II, Bitung Karangria, Kec. Tuminting, Kota Manado, Sulawesi Utara 95239</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam69">
                        <p class="tulisan">Soto Rusuk Babi Ko Petrus</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Laksda John Lie No.2b, Sulawesi Utara</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam70">
                        <p class="tulisan">RM Pondok Sarapung</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Sarapung No.38, Wenang Utara, Kec. Wenang, Kota Manado, Sulawesi Utara</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Pontianak</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam71">
                        <p class="tulisan">Restoran Sari Bento</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jenderal Ahmad Yani, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam72">
                        <p class="tulisan">Rumah Makan Annisa</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Patimura No.209D, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam73">
                        <p class="tulisan">Mie Tiaw Apollo</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Patimura No.63, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam74">
                        <p class="tulisan">RM Zakaria</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Slt. Abdurrahman No.9, Akcaya, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam75">
                        <p class="tulisan">Raja Uduk</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Teuku Umar No.76, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam76">
                        <p class="tulisan">Tom Yam Pak Long</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Gang Haji Mursyid No.1, Benua Melayu Laut, South Pontianak, Pontianak, West Kalimantan 78243</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam77">
                        <p class="tulisan">D'Bamboo Veteran</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Veteran No.4, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam78">
                        <p class="tulisan">Dapur Kepiting Pontianak</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Merdeka No.595, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78111</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam79"></div>
                    <p class="tulisan">Pondok Ale-Ale Ayani</p>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jenderal Ahmad Yani No.46, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam80">
                        <p class="tulisan">RM. 999 (Ayong)</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Gajah Mada No.15, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="inti1">
            <p class="kota">Riau</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam81">
                        <p class="tulisan">Local Pantry</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Riau Blk. C No.11-12A 3 No, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam82">
                        <p class="tulisan">Angkringan Teras Kayu</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Riau No.378, Kp. Bandar, Kec. Senapelan, Kota Pekanbaru, Riau 28155</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam83">
                        <p class="tulisan">Sop Ikan Kian Wee</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Riau No.41a, Padang Terubuk, Kec. Senapelan, Kota Pekanbaru, Riau 28155</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam84">
                        <p class="tulisan">RM Pauh Piaman</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Arifin Ahmad, Sidomulyo Timur, Marpoyan Damai, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28288</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam85">
                        <p class="tulisan">Radar 3</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jend. Sudirman, Sukaramai, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam86">
                        <p class="tulisan">Koki Sunda</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Jend. Sudirman, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam87"></div>
                    <p class="tulisan">RM Pak Abbas</p>
                    <div class="subdalam1">
                        <p class="jalan">JL. SM. Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam88">
                        <p class="tulisan">RM Puti Bunsu Paus</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Paus, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam89">
                        <p class="tulisan">RM Gobah Indah</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Pattimura No.19, Cinta Raja, Kec. Sail, Kota Pekanbaru, Riau 28127</p>
                        <br><br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam90">
                        <p class="tulisan">Sushi Tei Pekanbaru</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Soekarno - Hatta No.111, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292</p>
                        <br><br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>


        <div class="inti1">
            <p class="kota">Jakarta</p>
        </div>
        <div class="inti2 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="dalam91">
                        <p class="tulisan">Warung MJS</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Setia Budi Tengah No.11, RT.1/RW.1, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910</p>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam92">
                        <p class="tulisan">Munik Restoran</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Matraman Raya No.80, RT.9/RW.82, Kb. Manggis, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13150</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam93">
                        <p class="tulisan">Roemah Kuliner</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Pangeran Diponegoro No.21, RT.1/RW.1, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam94">
                        <p class="tulisan">Social House Grand Indonesia</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. M.H. Thamrin No.1, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam95">
                        <p class="tulisan">Waha Kitchen</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. K.H. Wahid Hasyim No.127, RT.10/RW.10, Kb. Kacang, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10240</p>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam96">
                        <p class="tulisan">Bubur Kwangtung</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Wolter Monginsidi No.49, RT.1/RW.1, Rw. Bar., Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12180</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam97">
                        <p class="tulisan">Arborea Cafe</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Gatot Subroto, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam98">
                        <p class="tulisan">Seribu Rasa Menteng</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. H. Agus Salim No.128, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</p>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam99">
                        <p class="tulisan">Gado-Gado Cikini</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Cikini IV No.1 no. 1, Cikini, Menteng, Central Jakarta City, Jakarta 10330</p>
                        <br>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="dalam100">
                        <p class="tulisan">Talaga Sampireun Menteng</p>
                    </div>
                    <div class="subdalam1">
                        <p class="jalan">Jl. Prajurit KKO Usman dan Harun Jl. Kramat Kwitang No.12, RT.8/RW.1, Senen, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10410</p>
                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i>
                    </div>
                </div>
                <!-- Tambahkan swiper-slide sesuai kebutuhan -->
            </div>
            <!-- navigation -->
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
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

    <script src="../mis/swiper-bundle.min.js"></script>
    <script src="mis.js"></script>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>