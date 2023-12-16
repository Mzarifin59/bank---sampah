
<?php 
	        session_start();
	        if($_SESSION['status']!="user"){
		    header("location:login.php?pesan=belum_login");
	        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">   
    <title>Tentang Sampah</title>
</head>
<body>
<div class="wrapper">
       <!-- Navbar -->
<div class="navbar">
    <!-- Logo dan judul di kiri -->
    <div class="left-side">
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
    <div class="satu">
    <section class="artikel">
    <h1>Sampah</h1>
    <section class="bagian1">
        <p>Sampah merupakan buangan atau sisa dari hasil aktivitas manusia atau proses alam.
            Jadi sampah cenderung menjadi material yang tidak dibutuhkan atau tidak bisa di manfaatkan lagi
            bagi manusia. Menurut World Health Organization (WHO), sampah adalah sesuatu yang tidak digunakan, tidak dipakai, 
            tidak disenangi, atau sesuatu yang dibuang yang berasal dari kegiatan manusia dan tidak terjadi dengan sendirinya.
        </p> 
        <img src="img/Sampah.jpg" alt="">  
    </section>
    <section class="bagian2">
            <h2>Jenis - Jenis Sampah</h2>
            <p>Sampahpun banyak jenisnya, di bedakan jenisnya agar mudah dalam memilahnya sehingga
                mudah dalam mengelola dan mendaur ulang sampah tersebut. Berikut beberapa jenis sampah :
            </p>

            <h3>1. Sampah Organik</h3>
            <p>Sampah organik adalah sampah yang mudah terurai di alam (mudah membususk) seperti makanan sisa, daun - daunan,
                kulit buah, ranting pohon dan masih banyak lagi. Sampah organikpun dapat dimanfaatkan dan di olah menjadi pupuk
                organik untuk tanaman.
            </p>
            <img src="img/organik.jpg" alt="">

            <h3>2. Sampah Anorganik</h3>
            <p>Sampah anorganik adalah sampah yang sifatnya sulit terurai (butuh waktu yang lama untuk hancur) seperti plastik,
                kaleng, dan styrofoam. Tetapi sampah anorganikpun dapat di manfaatkan menjadi kerajinan atau di ubah menjadi barang
                yang dapat di manafaatkan kembali.
            </p>
            <img src="img/anorganik.jpg" alt="">

            <h3>3. Sampah Berbahaya dan Beracun (B3)</h3>
            <p>Sampah B3 adalah sampah sisa dari kegiatan atau usaha yang mengandung zat atau komponen yang dapat membahayakan lingkungan
                sekitar. Contoh sampah B3 seperti baterai bekas, oli bekas, lampu bekas dan lain lain.
            </p>
            <img src="img/B3.jpg" alt="">
    </section>
    <section class="bagian3">
        <h2>Penanganan Sampah</h2>
        <p>Tentu! Untuk mengurangi sampah di perlukan upaya penanganan yang dapat di lakukan oleh masyarakat secara umum.
            Berikut beberapa penanganan sampah :
        </p>
        <img src="img/3R.jpg" alt="">

        <h3>1. Reduse</h3>
        <p>Reduse ialah salah satu penganganan sampah dengan cara mengurangi penggunaan barang barang yang dapat menjadi sampah.
            Biasanya reduse di terapkan pada barang sekali pakai seperti kantong plastik, botol plastik, dan lain lain yang cenderung
            berbahan platik.
        </p>

        <h3>2. Reuse</h3>
        <p>Penanganan kedua yaitu reuse yaitu menggunakan kembali barang yang sudah terpakai, dengan memakainya kembali
            maka dapat mengurangi sampah. Contoh penanganannya seperti menggunakan kembali botol plastik menjadi vas bunga.
        </p>

        <h3>3. Recyle</h3>
        <p>Recyle artinya mendaur ulang. Maksudnya mendaur ulang produk yang sudah menjadi sampah, penanganan ini banyak di lakukan
            di berbagai daerah. Dari penanganan ini pun dapat memiliki nilai ekonomis, misalnya dari sampah di daur ulang menjadi barang
            yang dapat di jual.
        </p>
    </section>
    </section>
    </div>
</body>
</html>