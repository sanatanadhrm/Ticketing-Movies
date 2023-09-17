<?php
session_start();

if (!isset($_SESSION["loginValid"])) {
  header("Location: login.php");
  exit;
}

require 'fungsi.php';

$id = $_GET["id"];
$username = $_GET["user"];

$pesan = [
  'FilmId' => $id,
  'UserId' => $username,
  'FilmName' => '',
  'Bioskop' => '',
  'Jam' => '',
  'Hari' => '',
  'Jumlah' => '',
  'Harga' => ''
];
 

if (isset($_POST['submit'])) {
  $idfilm = $pesan['FilmId'];

  $daftarFilm = query("SELECT * FROM film WHERE FilmId = $idfilm")[0];

  $pesan['FilmName'] = $daftarFilm['FilmName'];
  $pesan['Bioskop'] = $_POST['mall'];
  $pesan['Jam'] = $_POST['jam'];
  $pesan['Hari'] = $_POST['hari'];
  $pesan['Jumlah'] = $_POST['jumlah'];
  $pesan['Harga'] =  $daftarFilm['Harga'] ;
  $_SESSION['pesan'] = $pesan;

  header('Location: booking.php');
}

$film = query("SELECT * FROM film WHERE FilmId = $id")[0];
$user = query("SELECT * FROM login WHERE UserId = '$username'")[0];
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <link rel="stylesheet" href="css/pesantiket.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="post">
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
        <section class="date">
            <div class="judul">
                <span>~ <?= $film["FilmName"]; ?> ~</span>
            </div>
                <div class="date_items">
                    <input type="radio" name="hari" id="senin" value="8 Juni, Senin">
                    <label class="items" for="senin">8 JUNI <br> SENIN</label>
                    <input type="radio" name="hari" id="selasa"value="9 Juni, Selasa" >
                    <label class="items" for="selasa">9 JUNI <br> SELASA</label>
                    <input type="radio" name="hari" id="rabu" value="10 Juni, Rabu">
                    <label class="items" for="rabu">10 JUNI <br> RABU</label>
                    <input type="radio" name="hari" id="kamis" value="11 Juni, Kamis">
                    <label class="items" for="kamis">11 JUNI <br> KAMIS</label>
                    <input type="radio" name="hari" id="jumat" value="12 Juni, Jumat">
                    <label class="items" for="jumat">12 JUNI <br> JUMAT</label>
                    <input type="radio" name="hari" id="sabtu" value="13 Juni, Sabtu">
                    <label class="items" for="sabtu">13 JUNI <br> SABTU</label>
                    <input type="radio" name="hari" id="minggu" value="14 Juni, Minggu">
                    <label class="items" for="minggu">14 JUNI <br> MINGGU</label>

                </div>
        </section>
        <section class="place">
            <div class="place_item">
                <div class="title">
                    <input type="radio" name="mall" id="mall2" value="AEON MALL JGC CGV">
                    <label class="items_title" for="mall2">AEON MALL JGC CGV  <br> <span>REGULER 2D</span> </label>
                </div>
                <div class="times">
                    <input type="radio" name="jam" id="times1" value="10:30">
                    <label class="items_times" for="times1">10:30</label>
                    <input type="radio" name="jam" id="times2"value="13:00">
                    <label class="items_times" for="times2">13:00</label>
                    <input type="radio" name="jam" id="times3"value="15:00">
                    <label class="items_times" for="times3">15:00</label>
                    <input type="radio" name="jam" id="times4"value="17:00">
                    <label class="items_times" for="times4">17:00</label>
                    <input type="radio" name="jam" id="times5"value="20:00">
                    <label class="items_times" for="times5">20:00</label>
                    <input type="radio" name="jam" id="times6"value="22:00">
                    <label class="items_times" for="times6">22:00</label>
                </div>
            </div>
            <div class="place_item">
                <div class="title">
                    <input type="radio" name="mall" id="mall3" value="Cinema XXI Plaza Indonesia">
                    <label class="items_title" for="mall3">Cinema XXI Plaza Indonesia<br> <span>REGULER 2D</span> </label>
                </div>
                <div class="times">
                    <input type="radio" name="jam" id="times7" value="10:30">
                    <label class="items_times" for="times8">10:30</label>
                    <input type="radio" name="jam" id="times9"value="13:00">
                    <label class="items_times" for="times9">13:00</label>
                    <input type="radio" name="jam" id="times10"value="15:00">
                    <label class="items_times" for="times10">15:00</label>
                    <input type="radio" name="jam" id="times11"value="17:00">
                    <label class="items_times" for="times11">17:00</label>
                    <input type="radio" name="jam" id="times12"value="20:00">
                    <label class="items_times" for="times12">20:00</label>
                    <input type="radio" name="jam" id="times13"value="22:00">
                    <label class="items_times" for="times13">22:00</label>
                </div>
            </div>
            <div class="place_item">
                <div class="title">
                    <input type="radio" name="mall" id="mall4" value="CGV Cinemas Mall Taman Anggrek">
                    <label class="items_title" for="mall4">CGV Cinemas Mall Taman Anggrek  <br> <span>REGULER 2D</span> </label>
                </div>
                <div class="times">
                    <input type="radio" name="jam" id="times14" value="10:30">
                    <label class="items_times" for="times14">10:30</label>
                    <input type="radio" name="jam" id="times15"value="13:00">
                    <label class="items_times" for="times15">13:00</label>
                    <input type="radio" name="jam" id="times16"value="15:00">
                    <label class="items_times" for="times16">15:00</label>
                    <input type="radio" name="jam" id="times17"value="17:00">
                    <label class="items_times" for="times17">17:00</label>
                    <input type="radio" name="jam" id="times18"value="20:00">
                    <label class="items_times" for="times18">20:00</label>
                    <input type="radio" name="jam" id="times19"value="22:00">
                    <label class="items_times" for="times19">22:00</label>
                </div>
            </div>
            <div class="place_item">
                <div class="title">
                    <input type="radio" name="mall" id="mall5" value="Cinemaxx Theater Lippo Mall Puri">
                    <label class="items_title" for="mall5">Cinemaxx Theater Lippo Mall Puri  <br> <span>REGULER 2D</span> </label>
                </div>
                <div class="times">
                    <input type="radio" name="jam" id="times20" value="10:30">
                    <label class="items_times" for="times20">10:30</label>
                    <input type="radio" name="jam" id="times21"value="13:00">
                    <label class="items_times" for="times21">13:00</label>
                    <input type="radio" name="jam" id="times23"value="15:00">
                    <label class="items_times" for="times23">15:00</label>
                    <input type="radio" name="jam" id="times24"value="17:00">
                    <label class="items_times" for="times24">17:00</label>
                    <input type="radio" name="jam" id="times25"value="20:00">
                    <label class="items_times" for="times25">20:00</label>
                    <input type="radio" name="jam" id="times26"value="22:00">
                    <label class="items_times" for="times26">22:00</label>
                </div>
            </div>
        </section>

        <section class="info">
        <div class="no_kursi">
            <div class="title_kursi">Total Ticket</div>
            <div class="no_kursi_items">
                
                        <label for="seat">Number Seat :</label> <br>
                        <input type="number" name="jumlah" id="seat">
              
            </div>
        </div>
        
    </section>

        <section class="button">
            <div class="pilihbangku">
               <button type="submit" name="submit">PILIH BANGKU</button>
            </div>
        </section>
    </form>
</body>
</html>