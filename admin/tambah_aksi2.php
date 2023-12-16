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
$nik = $_POST['nik'];
$nama = $_POST['Tanggal_Pembayaran'];
$tgl = $_POST['Bulan'];
$jk = $_POST['Tahun'];
$rw = $_POST['Jenis_Pembayaran'];

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO iuran_sampah (NIK_warga, Tanggal_Pembayaran, Bulan, Tahun, Jenis_Pembayaran) 
VALUES('$nik','$nama','$tgl','$jk','$rw')");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_iuran.php");
 
?>