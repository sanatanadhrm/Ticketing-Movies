<?php

require 'fungsi.php';

$daftarFilm = query("SELECT * FROM film");
$daftarUser = query("SELECT * FROM login");

if (isset($_POST['hapus'])) {
    hapus($_POST);

    header("Location: admin.php");
}

if (isset($_POST['edit'])) {

    if (ubah($_POST) > 0) {
        echo "Berhasil";
        header("Location: admin.php");
    } else {
        echo "gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin.html</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header>
        <div class="left">
            <img src="img/icon/Logo.png" alt="Left Image" width="200px">
        </div>
        <div class="right">
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="nav_icons">
                <h1>Admin</h1>
                <img src="img/icon/lock.png" alt="" width="25px">
            </div>
        </div>
    </header>
    <section class="content">
        <div class="addfilm">
            <div class="button_items">
                <a href="tambah.php"><img src="img/icon/plus-sign.png" alt="" width="50px" top="10px"></a>
            </div>
        </div>
        <section class="content">
            <div class="editfilm">
                <?php foreach ($daftarFilm as $row): ?>
                    <div class="edit_items">
                        <div class="img_items">
                            <img src="img/filmPoster/<?= $row['Poster'] ?>" alt="">
                        </div>
                        <div class="edit_form">
                            <form action="" method="post">
                                <input type="hidden" name="FilmId" value="<?= $row["FilmId"]; ?>">
                                <label for="judul">Judul :</label>
                                <input type="text" name="FilmName" value="<?= $row['FilmName'] ?>"><br>
                                <label for="duras">Durasi:</label>
                                <input type="text" name="Duration" value="<?= $row['Duration'] ?>"><br>
                                <label for="genre">Genre : </label>
                                <input type="text" name="Category" value="<?= $row['Category'] ?>"><br>
                                <label for="genre">Harga : </label>
                                <input type="text" name="Harga" value="<?= $row['Harga'] ?>"><br>
                                <button type="submit" name="edit">Edit</button>
                                <button type="submit" name="hapus">Hapus</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="userlist">
            <h1>User List</h1>

            <?php foreach ($daftarUser as $row): ?>
                <div class="list_items">

                    <div class="name_user">
                        <span>
                            <?= $row['UserId'] ?>
                        </span>
                    </div>

                    <div class="min_user">
                        <a href="hapus.php?id=<?= $row['UserId'] ?>"><img src="img/icon/minus.png" alt="" width="40px"></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
</body>

</html>