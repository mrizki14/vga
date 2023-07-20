<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'env.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA SISWA BARU',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);

$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40,7,'Nama' ,1,0,'C');
$pdf->Cell(40,7,'Alamat' ,1,0,'C');
$pdf->Cell(30,7,'Jenis kelamin',1,0,'C');
$pdf->Cell(20,7,'Agama',1,0,'C');
$pdf->Cell(50,7,'Asal sekolah',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$result = mysqli_query($conn,"SELECT * FROM siswa");
$count = mysqli_num_rows($result);
while($siswa = mysqli_fetch_array($result)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(40,6, $siswa['nama'],1,0);
  $pdf->Cell(40,6, $siswa['alamat'],1,0);  
  $pdf->Cell(30,6, $siswa['jenis_kelamin'],1,0);
  $pdf->Cell(20,6, $siswa['agama'],1,0);
  $pdf->Cell(50,6, $siswa['asal_sekolah'],1,1);
}
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Total siswa pendaftar: '.$count,0,0,'C');
$pdf->Output();
 
?>