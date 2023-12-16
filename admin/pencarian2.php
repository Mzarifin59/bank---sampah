<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Pencarian</title>
    </head>
    <body>
    <section class="Tabel1">
        <section class="Awal">
        <section class="warga">
        <div class = "jdl">
        <h2>Data Iuran</h2>
        </div>
        <table >

              <?php 
	        session_start();
	        if($_SESSION['status']!="admin"){
		    header("location:../login.php?pesan=belum_login");
        }
if(isset($_GET['cari'])) {
    $cari = $_GET['cari'];

    $dbHost = "127.0.0.1";
    $dbUser = "rifky";
    $dbPass = "aku050906";
    $dbName = "iuran_sampah_db";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM iuran_sampah WHERE NIK_warga LIKE '%$cari%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>No Iuran</th>
                <th>NIK Warga</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["No_iuran"] . "</td>";
            echo "<td>" . $row["NIK_warga"] . "</td>";
            echo "<td>" . $row["Tanggal_Pembayaran"] . "</td>";
            echo "<td>" . $row["Bulan"] . "</td>";
            echo "<td>" . $row["Tahun"] . "</td>";
            echo "<td>" . $row["Jenis_Pembayaran"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 

    //Untuk Bulan

    $sql = "SELECT * FROM iuran_sampah WHERE Bulan LIKE '%$cari%'";
    $result = mysqli_query($conn, $sql);
   
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>No Iuran</th>
                <th>NIK Warga</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["No_iuran"] . "</td>";
            echo "<td>" . $row["NIK_warga"] . "</td>";
            echo "<td>" . $row["Tanggal_Pembayaran"] . "</td>";
            echo "<td>" . $row["Bulan"] . "</td>";
            echo "<td>" . $row["Tahun"] . "</td>";
            echo "<td>" . $row["Jenis_Pembayaran"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 

    //Untuk Bulan

    $sql = "SELECT * FROM iuran_sampah WHERE Jenis_Pembayaran LIKE '%$cari%'";
    $result = mysqli_query($conn, $sql);
   
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>No Iuran</th>
                <th>NIK Warga</th>
                <th>Tanggal Pembayaran</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jenis Pembayaran</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["No_iuran"] . "</td>";
            echo "<td>" . $row["NIK_warga"] . "</td>";
            echo "<td>" . $row["Tanggal_Pembayaran"] . "</td>";
            echo "<td>" . $row["Bulan"] . "</td>";
            echo "<td>" . $row["Tahun"] . "</td>";
            echo "<td>" . $row["Jenis_Pembayaran"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    
    mysqli_close($conn);
}


    ?>
    </table>
    </section>
          </section>
          </section>
    </body>
</html>
