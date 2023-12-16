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
    <title>Data Iuran</title>
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
            <form action="pencarian2.php" method="get">
	            <label>Cari :</label>
	            <input type="text" name="cari">
	            <input type="submit" value="Cari">
            </form>
        </ul>
    </div>
    </nav>

    <section class="Tabel2">
    <section class="kedua">
    <section class="iuran">
    <div class = "jdl1">
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
            </tr>
            <tr>
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
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No data available</td></tr>";
}

mysqli_close($conn);
?>

          </table>
          <br>
          <a href="iuran_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i><button>Print</button></a>
      </section>
      </section>
      </section>
</body>
</html>