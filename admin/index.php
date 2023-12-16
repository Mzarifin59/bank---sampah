<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bank Sampah Admin</title>
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
            <form action="pencarian.php" method="get">
	            <label>Cari :</label>
	            <input type="text" name="cari">
	            <input type="submit" value="Cari">
            </form>
        </ul>
        
    </div>
    </nav>

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
	        session_start();
	        if($_SESSION['status']!="admin"){
		    header("location:../login.php?pesan=belum_login");
	        }


	?>
    
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
              <br>
              <a href="warga_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i><button>Print</button></a>
          </section>
          </section>
          </section>

</body>
</html>