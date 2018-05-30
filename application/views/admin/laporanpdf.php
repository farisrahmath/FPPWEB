<?php

$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
$pdf->AddPage();
        // setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
        // mencetak string 
$pdf->Cell(280,6,'DATA PENDAFTAR SISWA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0);
$pdf->Cell(30,6,'Nama Siswa',1,0);
$pdf->Cell(28,6,'Jenis Kelamin',1,0);
$pdf->Cell(28,6,'Tanggal Lahir',1,0);
$pdf->Cell(28,6,'Agama',1,0);
$pdf->Cell(40,6,'Alamat',1,0);
$pdf->Cell(35,6,'Asal Sekolah',1,0);
$pdf->Cell(27,6,'No Telp',1,0);
$pdf->Cell(30,6,'Nama Ayah',1,0);
$pdf->Cell(30,6,'Nama ibu',1,0);

$pdf->SetFont('Arial','',10);
$daftar = $this->db->get('daftar')->result();

$no=1;
foreach ($daftar as $data)
{
    $pdf->Cell(10,6,'',0,1);
    $pdf->Cell(10,6,$no++,1,0);
    $pdf->Cell(30,6,$data->nama_siswa,1,0);
    $pdf->Cell(28,6,$data->jenis_kelamin_siswa,1,0);
    $pdf->Cell(28,6,$data->tgl_lahir_siswa,1,0);
    $pdf->Cell(28,6,$data->agama_siswa,1,0);
    $pdf->Cell(40,6,$data->alamat_siswa,1,0);
    $pdf->Cell(35,6,$data->asal_sekolah_siswa,1,0);
    $pdf->Cell(27,6,$data->no_hp_siswa,1,0);
    $pdf->Cell(30,6,$data->nama_ayah_siswa,1,0);
    $pdf->Cell(30,6,$data->nama_ibu_siswa,1,0);
}
$pdf->Output();

?>