<?php
   ob_start();
   $con;
   $namaserver   =   "localhost";
   $username   =   "root";
   $password   =   "";
   $namadb      =   "tugas1";
   $con   =   mysqli_connect($namaserver,$username,$password,$namadb);
   if(!$con) {
      die("Maaf, Koneksi Gagal:".mysqli_connect_error());
   }
?>