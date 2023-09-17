<?php

session_start();

if (!isset($_SESSION["loginValid"])) {
  !header("Location:login.php");
  exit;
}
require 'fungsi.php';
$daftarFilm = query("SELECT * FROM film");
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="">
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
        <li><a href="#nowplaying">Now Playing</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="profil.php">Profile</a></li>
      </ul>
      <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
      <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
      <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
      <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
    </div>
  </header>
  <section class="nowplaying" id="nowplaying">
    <a href="#" class="title_nowplay"><span>N</span>OW Playing</a>
    <div class="movie">
      <?php foreach ($daftarFilm as $row): ?>
        <div class="item">
          <a href="pesantiket.php?id=<?=$row['FilmId'] ?>&user=<?= $_SESSION['User'] ?>">
            <img src="img/filmPoster/<?=$row['Poster'] ?> " alt="Movie 1" class="image_item">
          </a>
          <h3>
          <?=$row['FilmName'] ?>
          </h3>
          <div class="genre">
            <ul>

              <li>
                <span>
                  <?= $row['Category'] ?>
                </span>
              </li>

            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
 <section class="partners" id="partners">
      <h1> Our Partners</h1>
      <div class="logo-partner">
        <div class="logo_item"><img src="img/icon/xxi.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/appletv.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/bioskoponline.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/cacthplay.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/cgv.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/cinepolis.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/dana.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/klikfilm.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/vidio.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/visionplus.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/viu.png" alt=""></div>
        <div class="logo_item"><img src="img/icon/sushiroll.png" alt=""></div>   
      </div>
    </section>
    <section class="footer">
      <div class="content-footer">
        <div class="logo-tagline">
          <img src="img/icon/Logo.png" alt="logo" width="200px">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> 
            Rem deleniti quam ex voluptatibus nobis voluptatum laboriosam! <br>
            Non laborum molestias ex!</p>
        </div>
        <div class="feature">
          <div class="items-feat">Now Showing</div>
          <div class="items-feat">Tactix Now</div>
          <div class="items-feat">Spotlight</div>
          <div class="items-feat">Video & Feature</div>
          <div class="items-feat">Careers</div>
          <div class="items-feat">Contact Us</div>
          <div class="items-feat">Privacy Policy</div>
          <div class="items-feat">Terms & Conditions</div>
        </div>
        <div class="aboutus">
          <div class="aboutus1">
            TacTix ID Support <br>
            E-MAIL : 2110511016@mahasiswa.upnvj.ac.id
          </div>
          <div class="aboutus2">
            FOLLOW US
            <div class="icons">
              <img src="img/icon/download.png" alt="Section Image" width="40px">
              <img src="img/icon/download.png" alt="Section Image" width="40px">
              <img src="img/icon/download.png" alt="Section Image" width="40px">
            </div>
          </div>
          
        </div>
      </div>
    </section>

</html>
</body>