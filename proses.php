<?php
   error_reporting(E_ALL ^ E_NOTICE);
   $tinggi_badan = $_POST['tinggi_badan'];
   $jenis_kelamin = $_POST['jk'];

   echo "Tinggi badan Anda : ". $tinggi_badan. "<br>";
   echo "Jenis kelamin anda : ". $jenis_kelamin ."<br>";
   

   if ($jenis_kelamin = "L") {
      $jumlah = ($tinggi_badan-100)-(($tinggi_badan-100) * 0.10);
   } else {
      $jumlah = ($tinggi_badan-100)- (($tinggi_badan-100) * 0.15);
   }

   echo "Berat badan ideal anda adalah : " . $jumlah;
   
?>