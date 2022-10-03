<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "Data Gagal Ditambahkan";
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
  <link rel="stylesheet" href="style.css">
  <title>Tambah Data Buku</title>
  <style>
  body {
    padding: 0;
    margin: 0;
    background-image: url(img/bg.png);
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
}
a {
    display: block;
    font-size: x-small;
    text-decoration: none;
    color: #100720;
    margin-top: 10px;
} */
</style>
</head>

<body>
  
   <form method="post" class="box">
       <div class="header ">
          <h3 class="text-center">Form Tambah Data Buku</h3>
       </div>
    <ul>
      <li>
        <label class=lala>
          Nama Buku:
          <input  placeholder="ADD DATA"  class="all" type="text" name="nama_buku" autofocus required>
        </label>
      </li>
      <li>
        <label class=lala>
          Penulis:
          <input  placeholder="ADD DATA" class="all" type="text" name="penulis" required>
        </label>
      </li>
      <li>
</label>
<label class=lala>
          Gambar :
          <input  placeholder="ADD DATA" class="all " type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button  type="submit" name="tambah" class="submit">Tambah Data !</button>
      </li>
    </ul>
  </form>
</body>

</html>