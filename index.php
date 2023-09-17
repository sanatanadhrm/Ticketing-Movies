<?php

require 'fungsi.php';
$daftarFilm = query("SELECT * FROM film");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TACTIX</title>
    <link rel="stylesheet" href="css/style.css">
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
                <li><a href="home.php">Now Playing</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign-Up</a></li>
              </ul>
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
          <img class="imgpad" src="img/icon/download.png" alt="Right Image" width="40px">
        </div>
      </header>
      <section class="slideshow" id="slideshow">
        <div class="container">
          
          <div class="imgslide fade">
            <div class="numberslide">3 / 3</div>
            <img src="img/filmPoster/Batman.jpg" alt="">
            <div class="text">
              <h1>Batman</h1>
            </div>
          </div>
              <div class="imgslide fade">
                  <div class="numberslide">2 / 3</div>
                  <img src="img/filmPoster/AvengerBanner.jpg" alt="">
                  <div class="text">
                    <h1>Avengers</h1>
                    
                  </div>
                </div>
                
                <div class="imgslide fade">
                    <div class="numberslide">1 / 3</div>
                    <img src="img/filmPoster/colapse.jpg" alt="">
                    <div class="text">
                      <h1>TACTIX</h1>
                      <p>Easy To Book!</p>
                    </div>
                </div>
  
              <a class="prev" onClick="nextslide(-1)">&#10094;</a>
              <a class="next" onClick="nextslide(1)">&#10095;</a> 
          <div class="page">
              <span class="dot" onClick="dotslide(1)"></span>
              <span class="dot" onClick="dotslide(2)"></span>
              <span class="dot" onClick="dotslide(3)"></span>
          </div>
  
        </div>
  
      <script>
          var slideIndex = 1;
              showSlide(slideIndex);
  
          function nextslide(n){
              showSlide(slideIndex += n);
          }
  
          function dotslide(n){
              showSlide(slideIndex = n);
          }
  
          function showSlide(n) {
              var i;
              var slides = document.getElementsByClassName("imgslide");
              var dot = document.getElementsByClassName("dot");
              
              if (n > slides.length) {
                  slideIndex = 1
              }
              if (n < 1) {
                  slideIndex = slides.length;
              }
              for (i = 0; i < slides.length; i++) {
                  
                  slides[i].style.display = "none";
              }
  
              for (i = 0; i < slides.length; i++) {
                  
                  dot[i].className = dot[i].className.replace(" active", "");
              }
  
              slides[slideIndex - 1].style.display = "block";
  
              dot[slideIndex - 1].className += " active";
              
  
  
          }
      </script>
      </section>
        
    <section class="nowplaying" id="nowplaying">
      <a href="#" class="title_nowplay"><span>N</span>OW Playing</a>
      <div class="movie">
      
      <?php for ($x = 0; $x <= 2; $x++): ?>
      <div class="item">
          
            <img src="img/filmPoster/<?= $daftarFilm[$x]['Poster'] ?> " alt="Movie 1" class="image_item">
          
          <h3><?= $daftarFilm[$x]['FilmName'] ?> </h3>
          <div class="genre">
            <ul>
               
              <li>
                <span><?= $daftarFilm[$x]['Category'] ?></span>
              </li>
               
            </ul>
          </div>
        </div>
        <?php endfor; ?> 
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
</body>
</html>