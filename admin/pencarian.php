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
        <h2>Data Warga</h2>
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
    
    $sql = "SELECT * FROM warga WHERE Nama LIKE '%$cari%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>RW</th>
                <th>RT</th>
                <th>No Rumah</th>
                <th>No HP</th>
            </tr>";
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
        echo "</table>";
    } 

    //Untuk RT

    $sql = "SELECT * FROM warga WHERE RT LIKE '%$cari%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>RW</th>
                <th>RT</th>
                <th>No Rumah</th>
                <th>No HP</th>
            </tr>";
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
