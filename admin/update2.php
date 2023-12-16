<?php 
// koneksi database
$dbHost = "127.0.0.1";
$dbUser = "rifky";
$dbPass = "aku050906";
$dbName = "iuran_sampah_db";
        
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
        }
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$tanggal = $_POST['tgl'];
$bln = $_POST['bulan'];
$thn = $_POST['tahun'];
$bayar = $_POST['jp'];
 
// update data ke database
mysqli_query($conn,"UPDATE iuran_sampah SET NIK_Warga='$nik', Tanggal_Pembayaran='$tanggal', Bulan='$bln', Tahun='$thn',Jenis_Pembayaran='$bayar' WHERE No_iuran='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_iuran.php");
 
?>