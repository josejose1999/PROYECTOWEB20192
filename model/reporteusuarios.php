<?php

	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT u.Nombre, u.Apellido, t.tipo  from usuarios as u 
		join tipo_usuario as t
		on u.id_tipo=t.id_tipo
		GROUP BY u.Nombre, t.tipo, u.Apellido";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->Cell(120,10, 'Reporte De Usuarios',0,0,'C');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(61,6,'Nombre',1,0,'C',1);
	$pdf->Cell(61,6,'Apellido',1,0,'C',1);
	$pdf->Cell(61,6,'tipo',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(61,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(61,6,utf8_decode($row['Apellido']),1,0,'C');
		$pdf->Cell(61,6,utf8_decode($row['tipo']),1,1,'C');
	}
	$pdf->Output();
?>