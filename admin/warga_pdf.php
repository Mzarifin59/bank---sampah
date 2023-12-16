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
$pdf->Cell(0, 10, 'Data Warga', 0, 1, 'C');
 
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40, 7, 'NIK', 1);
$pdf->Cell(40, 7, 'Nama', 1);
$pdf->Cell(40, 7, 'Tanggal Lahir', 1);
$pdf->Cell(30, 7, 'Jenis Kelamin', 1);
$pdf->Cell(15, 7, 'RW', 1);
$pdf->Cell(15, 7, 'RT', 1);
$pdf->Cell(25, 7, 'No Rumah', 1);
$pdf->Cell(25, 7, 'No HP', 1);
 
 
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($conn, "SELECT  * FROM warga");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(40, 6, $d['NIK'], 1);
    $pdf->Cell(40, 6, $d['Nama'], 1);
    $pdf->Cell(40, 6, $d['Tanggal_Lahir'], 1); 
    $pdf->Cell(30, 6, $d['Jenis_Kelamin'], 1); 
    $pdf->Cell(15, 6, $d['RW'], 1); 
    $pdf->Cell(15, 6, $d['RT'], 1); 
    $pdf->Cell(25, 6, $d['No_Rumah'], 1); 
    $pdf->Cell(25, 6, $d['No_HP'], 1); 
    $pdf->Ln();
}

$pdf->Output();
 
?>