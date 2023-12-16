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
 
// menangkap data id yang di kirim dari url
$nik = $_GET['NIK'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from warga where NIK='$nik'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_warga.php");
 
?>