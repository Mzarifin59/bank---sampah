<?php
session_start();
// Koneksi database
$dbHost = "127.0.0.1";
$dbUser = "rifky";
$dbPass = "aku050906";
$dbName = "iuran_sampah_db";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Cek apakah formulir telah disubmit
$username = $_POST['user'];
$password = md5($_POST['pass']);

// Query untuk mencari admin
$admin_query = mysqli_query($conn, "SELECT * from admin where User_Name='$username' and Password='$password'");

// Query untuk mencari user
$user_query = mysqli_query($conn, "SELECT * from user where username='$username' and password='$password'");

// Menghitung jumlah data yang ditemukan untuk admin
$admin_count = mysqli_num_rows($admin_query);

// Menghitung jumlah data yang ditemukan untuk user
$user_count = mysqli_num_rows($user_query);

if ($admin_count > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "admin";
    header("location: admin/index.php");
} else if ($user_count > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "user";
    header("location: Project.php");
} else {
    $_SESSION['pesan'] = "Username atau password salah!";
    header("location: login.php");
    exit();
}
?>
