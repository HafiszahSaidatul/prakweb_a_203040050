<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");

//Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Rubik+Dirt&display=swap" rel="stylesheet">
    <title>Daftar Buku</title>

 
</head>

<body>
  <div class="container-sm">
  <div class="jumbroton border p-4">

  <div class="card">
    
  <div class="card-header text-center "navbar style="font-size :30px; background-color: #FFB200; font-family: 'Aref Ruqaa Ink', serif;">
   Daftar Buku
  </div>
  <div class="card-body">
    <h5  class="card-title"><a href="tambah.php">Tambah Data Buku</a></h5>
    <table class="table table-bordered text-center" style=" font-weight: bold; background-color: #FFC045; font-family: 'Aref Ruqaa Ink', serif;">
  <tr>
      <th>ID BUKU</th>
      <th>NAMA BUKU</th>
      <th>GAMBAR</th>
      <th>AKSI</th>
    </tr>


    <?php $i = 1;
    foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $bk["nama_buku"]; ?></td>
        <td><img src="img/<?= $bk["gambar"]; ?>" width="110"></td>
        <td>
          <a href="detail.php?id=<?= $bk["id"]; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
