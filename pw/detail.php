<?php
require 'functions.php';

//Ambil id dari URL
$id = $_GET['id'];

//Query Buku dari id
$bk = query("SELECT * FROM buku WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Rubik+Dirt&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Daftar Buku</title>
  <style>
    
@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');


    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 0;
    margin: 0;
    background-image: url(img/bg.png);
    background-size: cover;
}


.card {
    position: relative;
    width: 300px;
    height: 350px;
    margin: 20px;
}

.card .face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 10px;
    overflow: hidden;
    transition: .5s;
}
  </style>
</head>

<body>
  <h3>DETAIL BUKU</h3>
  <div class="card">
        <div class="face front">
        <img src="img/<?= $bk["gambar"]; ?>" width="100">
            <h3>Press For Details</h3>
        </div>
        <div class="face back">
       <li style ="font-family: 'Aref Ruqaa Ink', serif;"> Judul Buku :<?= $bk['nama_buku']; ?></li>
       <li style ="font-family: 'Aref Ruqaa Ink', serif;">Penulis Buku : <?= $bk['penulis']; ?></li>
        <li style ="font-family: 'Aref Ruqaa Ink', serif;"><a href="ubah.php?id=<?= $bk['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></li>
            <div class="link">
            <li ><a style ="font-family: 'Aref Ruqaa Ink', serif; font-weight:bold; color:#FF1E1E;" href="index.php">Kembali Ke Daftar Buku</a></li>
            </div>
        </div>
    </div>
  <ul>
  </ul>
</body>

</html>