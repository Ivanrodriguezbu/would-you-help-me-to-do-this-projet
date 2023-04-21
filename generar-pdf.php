<?php
require('fpdf/fpdf.php');

// si se ha enviado el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// datos recibidos del formulario
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$fecha = $_POST['fecha'];


	// creación del objeto PDF
	$pdf = new FPDF();
	$pdf->AddPage();

	// fuente y tamaño de letra
	$pdf->SetFont('Arial', 'B', 14);

	// título del documento
	$pdf->Cell(0, 10, 'Hoja de vida', 0, 1, 'C');

	// separación
	$pdf->Ln(10);

	// datos personales
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 10, 'Datos personales', 0, 1);
	$pdf->SetFont('Arial', '', 12);
	$pdf->Cell(0, 10, 'Nombre: '.$nombre, 0, 1);
	$pdf->Cell(0, 10, 'Correo electrónico: '.$correo, 0, 1);
	$pdf->Cell(0, 10, 'Teléfono: '.$telefono, 0, 1);
	$pdf->Cell(0, 10, 'Fecha de nacimiento: '.$fecha, 0, 1);

	// separación
	$pdf->Ln(10);

	// educación
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 10, 'Educación', 0, 1);
	$pdf->SetFont('Arial', '', 12);
	$pdf->MultiCell(0, 10, $educacion);

	// separación
	$pdf->Ln(10);

	// experiencia laboral
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 10, 'Experiencia laboral', 0, 1);
	$pdf->SetFont('Arial', '', 12);
	$pdf->MultiCell(0, 10, $experiencia);

	// salida del documento
	$pdf->Output('hoja_de_vida.pdf', 'D');
}
?>
