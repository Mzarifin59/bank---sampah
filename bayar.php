<?php 
	        session_start();
	        if($_SESSION['status']!="user"){
		    header("location:login.php?pesan=belum_login");
	        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Pembayaran Iuran</title>
</head>
<body>
<div class="wrapper">
       <!-- Navbar -->
<div class="navbar">
    <!-- Logo dan judul di kiri -->
    <div class="left-side">
      <img src="logo.png" alt="Logo" class="logo">
      <div class="title">Bank Sampah</div>
    </div>
  
    <!-- Daftar halaman di kanan -->
    <div class="right-side">
      <a href="Project.php">Beranda</a>
      <a href="artikel.php">Tentang Sampah</a>
      <a href="bayar.php">Bayar</a>
      <a href="index.php">Data</a>
      <a href="timeline.php"><img src="img/login.png" alt=""></a>
    </div>
  </div>
    </div>

    <section class="pembayaran">
        <h2>Form Pembayaran Iuran</h2>
        <form action="bayar_aksi.php" method="post">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" placeholder="Masukkan NIK Kamu" require>

            <label for="bulan">Bulan</label>
            <input type="text" name="bulan" placeholder="Pembayaran Untuk Bulan Apa" require>
           

            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" placeholder="Pembayaran Untuk Tahun Apa" require>

            <label for="jp">Jenis Pembayaran</label>
            <select name="jp" id="jp" >
            <option value="Gopay">Gopay (081221874683)</option>
            <option value="ShopeePay">ShopeePay (081221874683) </option>
            <option value="Ovo">Ovo (081221874683)</option>
            <option value="Langsung">Langsung</option>
            </select><br>
            <br>

            <button type="submit">Bayar</button>
    
        </form>
    </section>

    
</body>
</html>