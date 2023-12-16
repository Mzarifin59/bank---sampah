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
    <title>Edit Data Iuran</title>
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
        <h2>Update Data Iuran</h2>

        <?php
	$dbHost = "127.0.0.1";
    $dbUser = "rifky";
    $dbPass = "aku050906";
    $dbName = "iuran_sampah_db";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	$id = $_GET['No_iuran'];
	$data = mysqli_query($conn,"SELECT * FROM iuran_sampah WHERE No_iuran='$id'");
	while($d = mysqli_fetch_array($data)){
        ?>
        <form method="POST" action="update2.php">

            <label for="id">No Iuran:</label>
            <input type="text" name="id" value="<?php echo $d['No_iuran']; ?>">

            <div class="pilih">
            <label for="nik">NIK:</label>
            <select name="nik" value="<?php echo $d['NIK_warga']; ?>" required>
            <?php
                $dbHost = "127.0.0.1";
                $dbUser = "rifky";
                $dbPass = "aku050906";
                $dbName = "iuran_sampah_db";

                $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

            if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT NIK, Nama FROM warga";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row["NIK"] . "'>" . $row["Nama"] . " (" . $row["NIK"] . ")</option>";
                    }
                }
                mysqli_close($conn);
                ?>
            </select>
            

            <label for="Nama">Tanggal Pembayaran:</label>
            <input type="date" name="tgl" value="<?php echo $d['Tanggal_Pembayaran']; ?>" required>
            

            <label for="Tanggal_Lahir">Bulan:</label>
            <input type="text" name="bulan" value="<?php echo $d['Bulan']; ?>" required>
            <br>

            <label for="RW">Tahun:</label>
            <input type="text" name="tahun" value="<?php echo $d['Tahun']; ?>" required>
            <br>
            <br>

            <label for="RW">Jenis Pembayaran:</label>
            <input type="text" name="jp" value="<?php echo $d['Jenis_Pembayaran']; ?>" required>

            <button type="submit" value="SIMPAN">Simpan</button>
            
        </form>
        <?php
    }
    ?>
    </div>
          </section>


</body>
</html>