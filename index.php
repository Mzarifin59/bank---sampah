<?php 
	        session_start();
	        if($_SESSION['status']!="user"){
		    header("location:login.php?pesan=belum_login");
	        }
?>

<html>
    <head>
        <title>Data</title>
        <link rel="stylesheet" href="data.css">
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

    <section class="Tabel1">
    <section class="Awal">
    <section class="warga">
    <div class = "jdl">
    <h2>Data Warga</h2>
    </div>
    <table  >
        <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>RW</th>
                <th>RT</th>
                <th>No Rumah</th>
                <th>No HP</th>
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
        
        $sql = "SELECT * FROM warga";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["NIK"] . "</td>";
                echo "<td>" . $row["Nama"] . "</td>";
                echo "<td>" . $row["Tanggal_Lahir"] . "</td>";
                echo "<td>" . $row["Jenis_Kelamin"] . "</td>";
                echo "<td>" . $row["RW"] . "</td>";
                echo "<td>" . $row["RT"] . "</td>";
                echo "<td>" . $row["No_Rumah"] . "</td>";
                echo "<td>" . $row["No_HP"] . "</td>";
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

    <section class="Tabel2">
    <section class="kedua">
    <section class="iuran">
    <div class = "jdl1">
    <h2>Data Iuran</h2>
    </div>
    <table  >
        <tr>
                <th>NIK Warga</th>
                <th>Nama Warga</th>
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
        
        $sql = "SELECT * FROM viuran_warga";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["NIK_warga"] . "</td>";
                echo "<td>" . $row["Nama"] . "</td>";
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
      </section>
      </section>
      </section>

      

        

    </body>
</html>