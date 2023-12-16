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
    <title>Bank Sampah</title>
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
   <div class="wrapper">
    <section id="judul">
        <div class="kolom1">
        <h2>Bank Sampah</h2> 
        <p>Padalarang</p>
        </div>
    </section>
   </div>

   <div class="wrapper1">
    <section id="section1">
      <div class="deskripsi">
        <div class="text-container">
          <img src="img/image.png" alt="">
      <h2>Web Bank Sampah</h2>
      <p>Web bank sampah ini merupakan web berisi informasi seputar sampah di Padalarang, cara penanganan, cara pemilahan sampah dan lain lain. 
         Web ini pun menyediakan fitur pembayran iuran sampah secara online, dengan metode pembayaran yang 
         beragam.</p>
         <button>Lihat Di Sini</button>
        </div>
      </div>
    </section>
   </div>

   <section id="section3">
    <div class="wrapper">
      <div class="jdl1">
        <img src="img/image1.png" alt="">
        <div class="text">
        <h2>Pembayaran Iuran</h2>
        <a href="bayar.php"><button>Bayar Di Sini</button></a>
      </div>
      </div>
    </div>
   </section>
</body>
</html>