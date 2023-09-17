<?php

session_start();

require 'fungsi.php';

if (!isset($_SESSION["loginValid"])) {
  header("Location: login.php");
  exit;
}

$user = $_SESSION["User"];

$tiket = query("SELECT * FROM tiket WHERE user = '$user' ");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" href="css/profile.css">
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
        </div>
      </header>
      <section class="nowplaying" id="nowplaying">
      <h1>Account Setting</h1>
        <div class="hrclas">
          <hr class="new1">
        </div>
        <div class="accimg">
          <div class="imge">
            <img src="img/icon/icon-avatar.png" alt="Image">
          </div>
          <div class="acc">
            <p><?= $_SESSION['User'] ?></p>
          </div>
        </div>
      <div class="hrclas">
        <hr class="new1">
      </div>
        
      <h2>Active Ticket</h2>
      
      <?php foreach($tiket as $row): ?>
      <div class="tkt">
          <div class="tiket1"> 
            <div class="top-section">
              <a><?= $row['film'] ?></a>
              <div class="Tanggal-tempat">
                <ul id="Judul-list">
                  <li>
                    <span>Hari</span>
                  </li>
                  <li>
                    <span>Theater</span>
                  </li>
                  <li>
                    <span>Time</span>
                  </li>
                </ul>
                <ul id="isi-list">
                  <li>
                    <span><?= $row['hari'] ?></span>
                  </li>
                  <li>
                    <span><?= $row['bioskop'] ?></span>
                  </li>
                  <li>
                    <span><?= $row['jam'] ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="bottom-section">
              <div class="Kettiket">
                <ul id="Judul-list">
                  <li>
                    <span>Number of Tickets</span>
                  </li>
                  <li>
                    <span>Transcation Code</span>
                  </li>
                  <li>
                    <span>Keterangan</span>
                  </li>
                </ul>
                <ul id="isi-list">
                  <li>
                    <span><?= $row['seat'] ?></span>
                  </li>
                  <li>
                    <span><?= $row['kode_unik'] ?></span>
                  </li>
                  <li>
                    <span>Lunas</span>
                  </li>
                </ul>
              </div>            
            </div>
          </div>
        <?php endforeach; ?>
      
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
  </body>
  </html>
</body>