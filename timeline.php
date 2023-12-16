<html>
    <head>
        <title>Profil</title>
        <link rel="stylesheet" href="style1.css">
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
      <a href="#">Tentang Sampah</a>
      <a href="bayar.php">Bayar</a>
      <a href="index.php">Data</a>
      <a href="timeline.php"><img src="img/login.png" alt=""></a>
    </div>
  </div>
    </div>

        <div class="profile">
        <div class="judul">
        <h1>Profilmu</h1>
        </div>
    <?php 
	session_start();
	if($_SESSION['status']!="user"){
		header("location:login.php?pesan=belum_login");
	}
	?>
   <div class="desc">
    <img src="img/Profil.jpg" alt="">
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Di Web Bank Sampah.</h4>
    <a href="logout.php">Logout</a>
    </div>
    </div>

    </body>
</html>