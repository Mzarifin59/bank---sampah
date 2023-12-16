<?php 
	        session_start();
	        if($_SESSION['status']!="admin"){
		    header("location:../login.php?pesan=belum_login");
	        }
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data Warga</title>
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

          <section class="tabel_tambah">
          <div class="form-container">
        <h2>Update Data Warga</h2>

        <?php
	$dbHost = "127.0.0.1";
    $dbUser = "rifky";
    $dbPass = "aku050906";
    $dbName = "iuran_sampah_db";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	$nik = $_GET['NIK'];
	$data = mysqli_query($conn,"SELECT * FROM warga WHERE NIK='$nik'");
	while($d = mysqli_fetch_array($data)){
        ?>
        <form method="POST" action="update.php">
            <label for="NIK">NIK:</label>
            <input  type="text" name="nik" value="<?php echo $d['NIK']; ?>" required>
            

            <label for="Nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $d['Nama']; ?>" required>
            

            <label for="Tanggal_Lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl" value="<?php echo $d['Tanggal_Lahir']; ?>" required>
            <br>

            <label for="RW">Jenis Kelamin:</label>
            <input type="text" name="jk" value="<?php echo $d['Jenis_Kelamin']; ?>" required>
            <br>
            <br>

            <label for="RW">RW:</label>
            <input type="text" name="rw" value="<?php echo $d['RW']; ?>" required>

            <label for="RT">RT:</label>
            <input type="text" name="rt" value="<?php echo $d['RT']; ?>" required>

            <label for="No_Rumah">No Rumah:</label>
            <input type="text" name="rumah" value="<?php echo $d['No_Rumah']; ?>" required>

            <label for="No_HP">No HP:</label>
            <input type="text" name="hp" value="<?php echo $d['No_HP']; ?>" required>

            <button type="submit" value="SIMPAN">Simpan</button>
            
        </form>
        <?php
    }
    ?>
    </div>
          </section>


</body>
</html>