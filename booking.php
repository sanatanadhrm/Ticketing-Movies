<?php
session_start();

if (!isset($_SESSION["loginValid"])) {
  header("Location: login.php");
  exit;
}

require 'fungsi.php';
// if (isset($_POST['submit3'])) {

//   exit();
// }

$jumlah = $_SESSION["pesan"]["Jumlah"];
$id = $_SESSION["pesan"]["FilmId"];
$username = $_SESSION["pesan"]["username"];

if(isset($_POST['submit2'])){
    if (isset($_POST['seat'])) {
        $_SESSION['seats'] = $_POST['seat'];
    } else {
        $_SESSION['seats'] = array(); // Empty array if no seats are selected
    }
    
  header('Location: pembayarn.php');
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
    <link rel="stylesheet" href="css/booking.css">
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
    <form action="" method="post">
      <section class="judul">
          <div class="judul_film">
              ~ <?= $film["FilmName"]; ?> ~
            </div>
    </section>
    <section class="seat">
        <div class="subseat1">
            <div class="colseat1.1">
                <div class="rowseat">A1</div>
                <div class="rowseat">B1</div>
                <div class="rowseat">C1</div>
                <div class="rowseat">D1</div>
                <div class="rowseat">E1</div>
                <div class="rowseat">F1</div>
                <div class="rowseat">G1</div>
            </div>
            <div class="colseat1.2">
                <div class="rowseat">A2</div>
                <div class="rowseat">B2</div>
                <div class="rowseat">C2</div>
                <div class="rowseat">D2</div>
                <div class="rowseat">E2</div>
                <div class="rowseat">F2</div>
                <div class="rowseat">G2</div>
            </div>
        </div>
        <div class="subseat2">
            <div class="colseat2.1">
                <div class="rowseat">A3</div>
                <div class="rowseat">B3</div>
                <div class="rowseat">C3</div>
                <div class="rowseat">D3</div>
                <div class="rowseat">E3</div>
                <div class="rowseat">F3</div>
                <div class="rowseat">E3</div>
            </div>
            <div class="colseat2.2">
                <div class="rowseat">A4</div>
                <div class="rowseat">B4</div>
                <div class="rowseat">C4</div>
                <div class="rowseat">D4</div>
                <div class="rowseat">E4</div>
                <div class="rowseat">F4</div>
                <div class="rowseat">G4</div>
            </div>
            <div class="colseat2.3">
                <div class="rowseat">A5</div>
                <div class="rowseat">B5</div>
                <div class="rowseat">C5</div>
                <div class="rowseat">D5</div>
                <div class="rowseat">E5</div>
                <div class="rowseat">F5</div>
                <div class="rowseat">G5</div>
            </div>
            <div class="colseat2.4">
                <div class="rowseat">A6</div>
                <div class="rowseat">B6</div>
                <div class="rowseat">C6</div>
                <div class="rowseat">D6</div>
                <div class="rowseat">E6</div>
                <div class="rowseat">F6</div>
                <div class="rowseat">G6</div>
            </div>
            <div class="colseat2.5">
                <div class="rowseat">A7</div>
                <div class="rowseat">B7</div>
                <div class="rowseat">C7</div>
                <div class="rowseat">D7</div>
                <div class="rowseat">E7</div>
                <div class="rowseat">F7</div>
                <div class="rowseat">G7</div>
            </div>
            <div class="colseat2.6">
                <div class="rowseat">A8</div>
                <div class="rowseat">B8</div>
                <div class="rowseat">C8</div>
                <div class="rowseat">D8</div>
                <div class="rowseat">E8</div>
                <div class="rowseat">F8</div>
                <div class="rowseat">G8</div>
            </div>
        </div>
        <div class="subseat3">
            <div class="colseat3.1">
                <div class="rowseat">A9</div>
                <div class="rowseat">B9</div>
                <div class="rowseat">C9</div>
                <div class="rowseat">D9</div>
                <div class="rowseat">E9</div>
                <div class="rowseat">F9</div>
                <div class="rowseat">G9</div>
            </div>
            <div class="colseat3.2">
                <div class="rowseat">A10</div>
                <div class="rowseat">B10</div>
                <div class="rowseat">C10</div>
                <div class="rowseat">D10</div>
                <div class="rowseat">E10</div>
                <div class="rowseat">F10</div>
                <div class="rowseat">G10</div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="price">
            <div class="title_price">Total Harga</div>
            <div class="no_price"><span>RP</span> <?= $film["Harga"] ?></div>
        </div>
        
        <div class="no_kursi">
            <div class="title_kursi">Total Ticket</div>
            <div class="no_kursi_items">
                    <?php for ($i=0; $i < $jumlah; $i++): ?>

                        <label for="seat<?php $i ?>">Number Seat :</label> <br>
                        <input type="text" name="seat[]" id="seat<?= $i ?>">
                
                    <?php endfor; ?>
                    
                </div>
        </div>
        <div class="jumlah">
            <div class="title_jumlah">Total Ticket</div>
            <div class="no_jumlah"><?= $jumlah ?></div>
        </div>
    </section>
    <section class="button">
        <div class="pilihbangku">
            <button type="submit" name="submit2">PILIH METODE PEMBAYARAN</button>
        </div>
    </section>
</form> 
   
</body>
</html>