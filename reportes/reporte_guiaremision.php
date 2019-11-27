<?php
  include 'plantilla.php';
  require 'conexion.php';

$query = "SELECT * from guiaremision";
  $resultado = $mysqli->query($query);
  
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(13,6,'Codigo',1,0,'C',1);
  $pdf->Cell(25,6,'Fecha Traslado',1,0,'C',1);
  $pdf->Cell(25,6,'Punto Partida',1,0,'C',1);
  $pdf->Cell(23,6,'Punto llegada',1,0,'C',1);
  $pdf->Cell(33,6,'Motivo del Traslado',1,0,'C',1);
  $pdf->Cell(35,6,'Nombre del Accesorio',1,0,'C',1);
  $pdf->Cell(40,6,'Responsable del Traslado',1,1,'C',1);
  
  $pdf->SetFont('Arial','',7);
  
  while($row = $resultado->fetch_assoc())
  {
    $pdf->Cell(13,6,$row['codigoguiaremision'],1,0,'C');
    $pdf->Cell(25,6,utf8_decode($row['fechatraslado']),1,0,'C');
    $pdf->Cell(25,6,utf8_decode($row['puntopartida']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['puntollegada']),1,0,'C');
    $pdf->Cell(33,6,utf8_decode($row['motivotraslado']),1,0,'C');
    $pdf->Cell(35,6,utf8_decode($row['nombreaccesorio']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['responsabletraslado']),1,1,'C');
  }
  $pdf->Output();
?>

