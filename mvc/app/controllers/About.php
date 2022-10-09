<?php
class About
{
  public function index($nama = 'Hafiszah Saidatul', $pekerjaan = 'Mahasiswa')
  {
    echo "Halo, nama saya $nama, saya seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}