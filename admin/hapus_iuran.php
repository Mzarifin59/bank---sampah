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
$id = $_GET['No_iuran'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from iuran_sampah where No_iuran='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_iuran.php");
 
?>