<?php

$koneksi = mysqli_connect("localhost","root","","uas");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

function registrasi($data){
    global $koneksi;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi,$data['password']);
    
    $result = mysqli_query($koneksi,"SELECT UserId FROM login WHERE UserId='$username'");

    if(mysqli_fetch_assoc($result)){
        echo "
        <Script>
            alert('Username Sudah Terdaftar!')
        </Script>
        ";
        return false;
    }

    $password = password_hash($password,PASSWORD_DEFAULT);

    $query = "INSERT INTO login VALUES('$username','$password')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    
}

function hapus($data){
    global $koneksi;
    
    $id = $data['FilmId'];

    mysqli_query($koneksi,"DELETE FROM film WHERE FilmId=$id");

}

function hapusakun($data){
    global $koneksi;
     

    mysqli_query($koneksi,"DELETE FROM login WHERE UserId='$data'");

}

function ubah($data){
    
    global $koneksi;

    $id = $data['FilmId'];
    $filmName = $data['FilmName'];
    $durasi = $data['Duration'];
    $kategori = $data['Category'];
    $harga = $data['Harga'];
     

    $ubah ="UPDATE film SET
    FilmName = '$filmName' , Duration = '$durasi', Category = '$kategori', Harga = $harga 
    WHERE FilmId = $id
    ";  

    mysqli_query($koneksi,$ubah);
    
    
    return mysqli_affected_rows($koneksi);
}

function tambah($data){

    global $koneksi;
    
    $filmName = $data['FilmName'];
    $durasi = $data['Duration'];
    $kategori = $data['Category'];
    $poster = $data['Poster'];
    $harga = $data['Harga'];

    $tambah = "INSERT INTO film
        VALUES
        ('','$filmName','$durasi','$kategori',$harga,'$poster')
    ";

    mysqli_query($koneksi,$tambah);
    
    return mysqli_affected_rows($koneksi);
}
function tambahTiket($filmName,$user,$bioskop,$hari,$jam,$seat,$harga,$kodeunik){

    global $koneksi;

    $tambah = "INSERT INTO tiket
        VALUES
        ('','$filmName','$user','$bioskop','$hari','$jam','$seat',$harga,'$kodeunik');
    ";

    mysqli_query($koneksi,$tambah);
    
    return mysqli_affected_rows($koneksi);
}
?>