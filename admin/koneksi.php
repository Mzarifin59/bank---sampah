<?php
$koneksi = mysqli_connect("localhost","root","","iuran_sampah_db");

//cek koneksi
if(mysqli_connect_errno){
    echo "Koneksi database gagal :" . mysqli_connect_error();

}

?>