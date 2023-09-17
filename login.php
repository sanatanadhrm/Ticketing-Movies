<?php

session_start();

require 'fungsi.php';
if(isset($_POST["login"])){

  $username = strtolower($_POST["username"]);
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM  login WHERE UserId = '$username' ");

  if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["PW"])){
     $_SESSION["loginValid"]=true;  
     $_SESSION["User"] = $username;
      header("Location: home.php");
      exit;
    }else{
        echo "
        <Script>
            alert('Username/Password salah')
        </Script>
        ";    
    }

  }else{
    echo "
        <Script>
            alert('Username/Password salah')
        </Script>
        ";
  }
 

}

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TACTIX || LOGIN</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">
            <img src="img/icon/Logo.png" alt="">
            <form action=" " method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <p>Belum punya akun? <a href="signup.php">Daftar sekarang</a></p>
        </div>
    </body>
</html>
