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
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$jk = $_POST['jk'];
$rw = $_POST['rw'];
$rt = $_POST['rt'];
$rumah = $_POST['rumah'];
$hp = $_POST['hp'];
 
// update data ke database
mysqli_query($conn,"UPDATE warga SET NIK='$nik', Nama='$nama', Tanggal_Lahir='$tgl', Jenis_Kelamin='$jk',RW='$rw',RT='$rt',No_Rumah='$rumah',NO_HP='$hp' WHERE NIK='$nik'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_warga.php");
 
?>