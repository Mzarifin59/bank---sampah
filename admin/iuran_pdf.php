<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
$dbHost = "127.0.0.1";
                $dbUser = "rifky";
                $dbPass = "aku050906";
                $dbName = "iuran_sampah_db";

                $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

            if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Data Iuran Warga', 0, 1, 'C');
 
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40, 7, 'No Iuran', 1);
$pdf->Cell(40, 7, 'NIK Warga', 1);
$pdf->Cell(45, 7, 'Tanggal Pembayaran', 1);
$pdf->Cell(30, 7, 'Bulan', 1);
$pdf->Cell(15, 7, 'Tahun', 1);
$pdf->Cell(40, 7, 'Jenis Pembayaran', 1);
 
 
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($conn, "SELECT  * FROM iuran_sampah");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(40, 6, $d['No_iuran'], 1);
    $pdf->Cell(40, 6, $d['NIK_warga'], 1);
    $pdf->Cell(45, 6, $d['Tanggal_Pembayaran'], 1); 
    $pdf->Cell(30, 6, $d['Bulan'], 1); 
    $pdf->Cell(15, 6, $d['Tahun'], 1); 
    $pdf->Cell(40, 6, $d['Jenis_Pembayaran'], 1); 
    $pdf->Ln();
}

$pdf->Output();
 
?>