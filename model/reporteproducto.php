<?php
	include 'plantilla.php';
	require 'Database.php';

		try
		{
			$pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	$stm = $pdo->prepare("SELECT * FROM productos");
	$stm->execute();
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(61,15,'Nombre Producto',1,0,'C',1);
	$pdf->Cell(61,15,'Imagen Producto',1,0,'C',1);
	$pdf->Cell(61,15,'Precio',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
		foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$pdf->Cell(61,45,utf8_decode($r->name),1,0,'C');
				$pdf->Cell(61,45, $pdf->Image("../img/".$r->image, $pdf->GetX()+10, $pdf->GetY()+1, 45),1,0,"C");

			//$pdf->Ln();
			//	$pdf->Cell(61,6,utf8_decode($r->image),1,0,'C');;
				$pdf->Cell(61,45,utf8_decode($r->price),1,1,'C');
			}

	$pdf->Output();
?>