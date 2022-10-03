<?php
require 'functions.php';
// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Ambil id dari URL
$id = $_GET['id'];

// Query buku berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Rubik+Dirt&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
  <style>
  body {
    padding: 0;
    margin: 0;
    background-image: url(img/bg.png);
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
}

.overlay {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.box {
    position: absolute;
    width: 600px;
    background-color: white;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;
    box-shadow: 0 10px 10px 10px rgb(0, 0, 0, .2);
}

.header {
    background-color : #000;
    background-size: cover;
    padding: 90px 30px;
    color: white;
    font-family: 'Aref Ruqaa Ink', serif;
    border-radius: 15px 15px 0 0;
}


.header p {
    font-size: x-small;
}

.login-area {
    text-align: center;
    padding: 0px 0px 0px 50px;
}
.lala{
  font-family: 'Aref Ruqaa Ink', serif;
  font-weight:bold;
  font-size:18px;
}

.all{
  width: 150%;
    text-align: center;
    padding: 15px 0;
    border-radius: 20px;
    outline: none;
    border: none;
    color: white;
    
    justify-content: center;
    align-items: center;
    background-color:rgba(248,160,0,255);
    margin-bottom: 10px;
    transition: 5s;
}

.all1 {
    color: rgba(255, 255, 255, .7);
}

.all1 {
    background-color: rgba(55, 10, 114, .7);
}

.submit {
    width: 150px;
    padding: 10px;
    background-color: #000000;
    border-radius: 10px;
    font-weight: bold;
    color: white;
    border: none;
    outline: none;
    margin: 10px;
    transition: .2s;
    cursor: pointer;
}

.submit:hover {
    background-color:  #000000;
}

a {
    display: block;
    font-size: x-small;
    text-decoration: none;
    color: #100720;
    margin-top: 10px;
}
</style>
</head>

<body>
<form method="post" class="box">
       <div class="header "> 
  <h3  class="text-center">Form Ubah Data Mahasiswa</h3>
  </div> 
  <form method="post" action="">
    <input type="hidden" name="id" value="<?= $bk['id'];; ?>">
    <ul>
      <li>
        <label class=lala>
          Nama Buku :
          <input placeholder="UPDATE DATA"  class="all" type="text" name="nama_buku" autofocus required value="<?= $bk['nama_buku']; ?>">
        </label>
      </li>
      <li>
<label class=lala>
          Penulis:
          <input placeholder="UPDATE DATA"  class="all" type="text" name="penulis" required value="<?= $bk['penulis']; ?>">
        </label>
      </li>
      <li>
      <label class=lala>
          Gambar :
          <input placeholder="UPDATE DATA"  class="all" type="text" name="gambar" required value="<?= $bk['gambar']; ?>">
        </label>
      </li>
      <li>
        <button class="submit" type="submit" name="ubah">Ubah Data !</button>
      </li>
    </ul>
  </form>
</body>

</html>