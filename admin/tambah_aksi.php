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
$nik = $_POST['NIK'];
$nama = $_POST['Nama'];
$tgl = $_POST['Tanggal_Lahir'];
$jk = $_POST['Jenis_Kelamin'];
$rw = $_POST['RW'];
$rt = $_POST['RT'];
$rumah = $_POST['No_Rumah'];
$hp = $_POST['No_HP'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO warga VALUES('$nik','$nama','$tgl','$jk','$rw','$rt','$rumah','$hp' )");
 
// mengalihkan halaman kembali ke index.php
header("location:tambah_data_warga.php");
 
?>