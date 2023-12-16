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
    <title>Tambah Data Warga</title>
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

    <section class="Tambah1">
        <section class="first">
        <section class="warga1">
        <div class = "jdl3">
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
                        echo "<td><a href='update_warga.php?NIK=" . $row["NIK"] . "'>Edit</a> | <a href='hapus_warga.php?NIK=" . $row["NIK"] . "'>Hapus</a></td>";
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

          <section class="tabel_tambah">
          <div class="form-container">
        <h2>Tambah Data Warga</h2>
        <form method="post" action="tambah_aksi.php">
            <label for="NIK">NIK:</label>
            <input type="text" name="NIK" required>

            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" required>

            <label for="Tanggal_Lahir">Tanggal Lahir:</label>
            <input type="date" name="Tanggal_Lahir" required>
            <br>

            <label for="Jenis_Kelamin">Jenis Kelamin:</label>
            <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="Jenis_Kelamin" value="Perempuan"> Perempuan
            <br>
            <br>

            <label for="RW">RW:</label>
            <input type="text" name="RW" required>

            <label for="RT">RT:</label>
            <input type="text" name="RT" required>

            <label for="No_Rumah">No Rumah:</label>
            <input type="text" name="No_Rumah" required>

            <label for="No_HP">No HP:</label>
            <input type="text" name="No_HP" required>

            <button type="submit" value="SIMPAN">Tambah Data</button>
        </form>
    </div>
          </section>


</body>
</html>