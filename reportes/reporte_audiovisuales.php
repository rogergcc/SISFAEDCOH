<?php
  include 'plantilla.php';
  require 'conexion.php';

$query = "SELECT * FROM audiovisual";
  $resultado = $mysqli->query($query);
  
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',7);
  $pdf->Cell(10,6,'Codigo',1,0,'C',1);
  $pdf->Cell(20,6,'Curso',1,0,'C',1);
  $pdf->Cell(20,6,'Profesor',1,0,'C',1);
  $pdf->Cell(23,6,'Equipo Produccion',1,0,'C',1);
  $pdf->Cell(18,6,'Produccion',1,0,'C',1);
  $pdf->Cell(15,6,'Genero',1,0,'C',1);
  $pdf->Cell(15,6,'Fecha',1,0,'C',1);
  $pdf->Cell(33,6,'Sinopsis',1,0,'C',1);
  $pdf->Cell(31,6,'Video',1,0,'C',1);
  $pdf->Cell(13,6,'Estado',1,1,'C',1);
  
  $pdf->SetFont('Arial','',6);
  
  while($row = $resultado->fetch_assoc())
  {
    $pdf->Cell(10,6,$row['codigoaudiovisual'],1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['curso']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['profesor']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['equipoproduccion']),1,0,'C');
    $pdf->Cell(18,6,utf8_decode($row['produccion']),1,0,'C');
    $pdf->Cell(15,6,utf8_decode($row['genero']),1,0,'C');
    $pdf->Cell(15,6,utf8_decode($row['fechaproduccion']),1,0,'C');
    $pdf->Cell(33,6,utf8_decode($row['sinopsis']),1,0,'C');
    $pdf->Cell(31,6,utf8_decode($row['video']),1,0,'C');
    $pdf->Cell(13,6,utf8_decode($row['estado']),1,1,'C');
  }
  $pdf->Output();
?>