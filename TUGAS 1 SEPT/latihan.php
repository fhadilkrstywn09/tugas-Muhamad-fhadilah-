<?php
// modular adalah konsep pemrograman yang mencegah program menjadi beberapa bagian atau modul yang lebih kecil dan dapat digunakan kembali.

// kita akan memanggil file navbar.php dan footer.php di latihan.php

// dengan menggunakan include()

// include adalah salah satu cara untuk menggabungkan beberapa file php menjadi satu file php yang utuh. include() akan mengambil kode dari file yang di tentukan dan menempatkannya di tempat include() dipanggil. jika file yang dipanggil tidak ditemukan, maka akan muncul peringatan (warning) tetapi script tetap berjalan.


include ("navbar.php");
?>

    <h1>Hello, world! muhamad fhadilah dan lutfan | page latihan 1</h1>
  
<?php include("footer.php"); ?>