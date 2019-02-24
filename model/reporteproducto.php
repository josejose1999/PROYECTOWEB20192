<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM productos";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(61,6,'Nombre Producto',1,0,'C',1);
	$pdf->Cell(61,6,'Imagen Producto',1,0,'C',1);
	$pdf->Cell(61,6,'Precio',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(61,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(61,6,utf8_decode($row['Imagen']),1,0,'C');
		$pdf->Cell(61,6,utf8_decode($row['Precio']),1,1,'C');
	}
	$pdf->Output();
?>