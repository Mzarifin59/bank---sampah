<?php
// Koneksi database
$dbHost = "127.0.0.1";
$dbUser = "rifky";
$dbPass = "aku050906";
$dbName = "iuran_sampah_db";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
$nik = $_POST['nik'];  
$tgl_pembayaran = date("Y-m-d"); // Menggunakan fungsi date() untuk mendapatkan tanggal sekarang
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$jp = $_POST['jp'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO iuran_sampah (NIK_warga, Tanggal_Pembayaran, Bulan, Tahun, Jenis_Pembayaran) VALUES('$nik','$tgl_pembayaran','$bulan','$tahun','$jp')");

// mengalihkan halaman kembali ke index.php
header("location:bayar.php");
?>