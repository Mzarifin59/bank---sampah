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
    <title>Tambah Data Iuran</title>
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

    <section class="Tambah2">
    <section class="second">
    <section class="iur1">
    <div class = "jdl4">
    <h2>Data Iuran</h2>
    </div>
    <table  >
        <tr>
                <th>No Iuran</th>
                <th>Nama</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
                <th>Opsi</th>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <?php
$dbHost = "127.0.0.1";
$dbUser = "rifky";
$dbPass = "aku050906";
$dbName = "iuran_sampah_db";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT iuran_sampah.No_iuran, iuran_sampah.NIK_warga, iuran_sampah.Tanggal_Pembayaran, iuran_sampah.Bulan, iuran_sampah.Tahun, iuran_sampah.Jenis_Pembayaran, warga.Nama 
        FROM iuran_sampah
        INNER JOIN warga ON iuran_sampah.NIK_warga = warga.NIK";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["No_iuran"] . "</td>";
        echo "<td>" . $row["Nama"] . "</td>"; // Menampilkan nama pemilik NIK_Warga
        echo "<td>" . $row["Tanggal_Pembayaran"] . "</td>";
        echo "<td>" . $row["Bulan"] . "</td>";
        echo "<td>" . $row["Tahun"] . "</td>";
        echo "<td>" . $row["Jenis_Pembayaran"] . "</td>";
        echo "<td><a href='update_iuran.php?No_iuran=" . $row["No_iuran"] . "'>Edit</a> | <a href='hapus_iuran.php?No_iuran=" . $row["No_iuran"] . "'>Hapus</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No data available</td></tr>";
}

mysqli_close($conn);
?>

          </table>
      </section>
      </section>
      </section>

          <section class="tabel_iuran">
          <div class="form-container">
        <h2>Tambah Data Iuran</h2>
        <form action="tambah_aksi2.php" method="POST">
            <div class="pilih">
            <label for="nik">NIK:</label>
            <select name="nik" required>
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
            </div>

            <label for="Tanggal_Pembayaran">Tanggal Pembayaran:</label>
            <input type="date" name="Tanggal_Pembayaran" required>
            <br>

            <label for="Bulan">Bulan:</label>
            <input type="text" name="Bulan" required>

            <label for="Tahun">Tahun:</label>
            <input type="text" name="Tahun" required>

            <label for="Jenis_Pembayaran">Jenis Pembayaran:</label>
            <input type="text" name="Jenis_Pembayaran" required>

            <button type="submit">Tambah Data</button>
        </form>
    </div>
</section>
</body>
</html>