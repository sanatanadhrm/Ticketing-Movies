<?php

require 'fungsi.php';

if(isset($_POST['signup'])){
  if(registrasi($_POST)){
    echo '
    <script>
      alert("User berhasil ditambahkan");
      window.location.href = "login.php";
    </script>
    ';
  }else{
    echo mysqli_error($koneksi);
  }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>TACTIX || SIGNUP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <img src="img/icon/Logo.png" alt="">
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
        <Button type='submit' name='signup'>Sign Up</Button>
    </form>
  </div>
</body>
</html>