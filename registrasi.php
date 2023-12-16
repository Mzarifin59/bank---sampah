<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Registrasi</title>
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
       <a href="#">Beranda</a>
       <a href="#">Tentang Sampah</a>
       <a href="#">Artikel</a>
       <a href="">Bayar</a>
       <a href="index.php">Data</a>
       <a href="login.html"><img src="login.png" alt=""></a>
     </div>
   </div>
     </div>

     <section class="regis">
        <form action="regis_aksi.php" method="post">
            <label for="username">Username :</label>
            <input type="text" name="user">
    
            <label for="password">Password :</label>
            <input type="text" name="pass">

            <label for="nik">NIK :</label>
            <input type="text" name="nik">

            <label for="nama">Nama :</label>
            <input type="text" name="nama">

            <label for="tgl">Tanggal Lahir :</label>
            <input type="date" name="tgl">

            <label for="password">Jenis Kelamin :</label>
            <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="Jenis_Kelamin" value="Perempuan"> Perempuan
            <br>
            <br>

            <label for="rw">RW :</label>
            <input type="text" name="rw">

            <label for="rt">RT :</label>
            <input type="text" name="rt">

            <label for="rmh">No Rumah :</label>
            <input type="text" name="rmh">

            <label for="no">No HP :</label>
            <input type="text" name="no">
            <br>
    
            <button type="submit">Register</button>
    
        </form>
    </section>
</body>
</html>