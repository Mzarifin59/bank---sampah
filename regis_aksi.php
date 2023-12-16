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

// Tangkap data dari formulir
$username = $_POST['user'];
$raw_password = $_POST['pass'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tgl'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$rw = $_POST['rw'];
$rt = $_POST['rt'];
$no_rumah = $_POST['rmh'];
$no_hp = $_POST['no'];

// Mengenkripsi kata sandi
$password = md5($raw_password);

// Buat query SQL untuk memasukkan data ke tabel user
$query_user = "INSERT INTO user (Warga_NIK, username, password) VALUES ('$nik', '$username', '$password')";

// Eksekusi query untuk memasukkan data username dan password ke tabel user
if (mysqli_query($conn, $query_user)) {
    // Dapatkan ID pengguna yang baru saja dimasukkan
    $user_id = mysqli_insert_id($conn);

    // Buat query SQL untuk memasukkan data lainnya ke tabel warga
    $query_warga = "INSERT INTO warga (nik, nama, tanggal_lahir, jenis_kelamin, rw, rt, no_rumah, no_hp)
          VALUES ('$nik', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$rw', '$rt', '$no_rumah', '$no_hp')";

    // Eksekusi query untuk memasukkan data lainnya ke tabel warga
    if (mysqli_query($conn, $query_warga)) {
        header('Location: login.php');
    } else {
        echo "Terjadi kesalahan saat memasukkan data warga: " . mysqli_error($conn);
    }
} else {
    echo "Terjadi kesalahan saat memasukkan data pengguna: " . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
