<?php
session_start();

if (!isset($_SESSION["loginValid"])) {
  header("Location: login.php");
  exit;
}

require 'fungsi.php';

$pesan = $_SESSION["pesan"];
$seat = isset($_SESSION['seats']) ? $_SESSION['seats'] : array();

$kodeunik = uniqid();

$filmName = $pesan['FilmName'];
$user = $pesan['UserId'];
$bioskop = $pesan['Bioskop'];
$hari = $pesan['Hari'];
$harga = $pesan['Harga'];
$jam = $pesan['Jam'];

foreach ($seat as $seatItem) {
  tambahTiket($filmName, $user, $bioskop, $hari, $jam, $seatItem, $harga, $kodeunik);
}

unset($_SESSION["pesan"]);
unset($_SESSION["seats"]);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <link rel="stylesheet" href="css/pembayaran.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="left">
          <img src="img/icon/logo.png" alt="Left Image" width="200px">
        </div>
        <div class="right">
          <ul class="nav">
            <li><a href="home.php">Home</a></li>
            
          </ul>
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
        </div>
      </header>
    <section class="judul">
        <div class="judul_pembayaran">
            ~ METODE PEMBAYARAN ~
            
        </div>
    </section>
 
    <section class="metode">
        <div class="container">
            <a href="#popup"><div class="items"><img src="img/icon/pemuda.png" alt="" width="100px"></div></a>
            <a href="#popup"><div class="items"><img src="img/icon/dana.png" alt=""></div></a>
            <a href="#popup"><div class="items"><img src="img/icon/ovo.png" alt="" width="100px"></div></a>
            <a href="#popup"><div class="items"><img src="img/icon/img_bankid_other_banks.png" alt="" width="100px"></div></a>
        </div>
    </section>
    <div class="popup" id="popup">
        <div class="popup_content">
            <div class="popup_header">
                <h1>Pembayaran Telah Berhasil!!!</h1>
            </div>
            <div class="popup_middle">
                <div class="title">Kode Unik</div>
                <div class="code"><?= $kodeunik ?></div>
            </div>
            <div class="popup_button">
                <a href="profil.php">
                    Cek Aktivasi
                </a>
            </div>
        </div>
    </div>
</body>
</html>