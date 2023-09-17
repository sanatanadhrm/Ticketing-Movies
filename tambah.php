<?php
require 'fungsi.php';

if (isset($_POST['tambah'])) {
    
    if(tambah($_POST)>0){
        echo "Berhasil";
        header("Location: admin.php");
    }else{
        echo "gagal";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Film</title>
  <style>
     body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .form-container {
      display: flex;
      justify-content: center;
      height: auto;
    }

    .form-container form {
      text-align: left;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container label,
    .form-container input[type="text"],
    .form-container input[type="submit"] {
      display: block;
      margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
      margin: 0 10px;
      text-decoration: none;
      border: 1px solid black;
      padding: 10px 20px;
    }
  </style>
</head>
<body>
  <h1>Tambah Film</h1>

  <div class="form-container">
    <form action="" method="post">
    
      <label for="judul">Nama Film:</label>
      <input type="text" id="judul" name="FilmName" required>

      <label for="durasi">Durasi:</label>
      <input type="text" id="durasi" name="Duration"required>

      <label for="kategori">Kategori:</label>
      <input type="text" id="kategori" name="Category" required>
      
      <label for="harga">Harga:</label>
      <input type="Number" id="harga" name="Harga" required>
      
      <label for="poster">Poster:</label>
      <input type="text" id="poster" name="Poster" required>
      
      <button type="submit" name="tambah">Tambah</button>
    </form>
  </div>
</body>
</html>
