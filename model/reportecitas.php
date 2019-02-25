<?php

	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT *FROM citas";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L?');
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'FechaTentativa2',1,0,'C',1);
	$pdf->Cell(40,6,'HoraCita',1,0,'C',1);
	$pdf->Cell(40,6,'NombreOptica',1,0,'C',1);
	$pdf->Cell(45,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Celular',1,0,'C',1);
	$pdf->Cell(30,6,'Telefono',1,0,'C',1);
	$pdf->Cell(50,6,'Correo',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(40,6,utf8_decode($row['FechaTentativa']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['HoraCita']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['NombreOptica']),1,0,'C');
		$pdf->Cell(45,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Celular']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Telefono']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['Correo']),1,1,'C');
	}
	$pdf->Output();
?>