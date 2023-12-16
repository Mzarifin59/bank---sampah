<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <style>
        .error-message {
            color: red;
        }
    </style>
    <title>Login</title>
</head>
<body>

     <section class="log">
    <form action="login_aksi.php" method="post">
    <?php
    // Periksa apakah ada pesan kesalahan dalam sesi
    if (isset($_SESSION['pesan'])) {
        echo '<p class="error-message">' . $_SESSION['pesan'] . '</p>';
        // Hapus pesan dari sesi setelah ditampilkan
        unset($_SESSION['pesan']);
    }
    ?>
    
        <label for="user">Username :</label>
        <input type="text" name="user" placeholder="Masukkan username">

        <label for="pass">Password :</label>
        <input type="password" name="pass" placeholder="Masukkan password">


        <a href="registrasi.php">Belum Punya Akun?</a><br>
        <br>

        <button type="submit">Login</button>

    </form>
</section>
</body>
</html>