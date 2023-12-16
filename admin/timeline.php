<html>
    <head>
        <title>Profil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="wrapper">
        <!-- Navbar -->
 <div class="navbar">
     <!-- Logo dan judul di kiri -->
     <div class="left-side">
       <div class="title">Bank Sampah</div>
       <a href="timeline.php"><img src="../img/login.png" alt=""></a>
     </div>
   </div>
     </div>

     <nav>
        <div class="nav2">
        <ul>
            <li><a href="index.php">Data Warga</a></li>
            <li><a href="data2.php">Data Iuran</a></li>
            <li><a href="tambah_data_warga.php">Tambah Data Warga</a></li>
            <li><a href="tambah_data_iuran.php">Tambah Data Iuran</a></li>
        </ul>
    </div>
    </nav>

        <div class="profile">
        <div class="judul">
        <h1>Profilmu</h1>
        </div>
    <?php 
	session_start();
	if($_SESSION['status']!="admin"){
		header("location:../login.php?pesan=belum_login");
	}
	?>
   <div class="desc">
    <img src="../img/Profil.jpg" alt="">
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Jadilah admin yang baik.</h4>
    <a href="logout.php">Logout</a>
    </div>
    </div>

    </body>
</html>